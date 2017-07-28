package main

import (
	"log"
	"net/http"
	"io"
	"text/template"
    "os"
    "github.com/disintegration/imaging"
    "fmt"
    "time"
    "strconv"
    "crypto/md5"
)

func resizePage(w http.ResponseWriter, r *http.Request) {
	log.Println("method:", r.Method)
	if r.Method == "GET" {
	    crutime := time.Now().Unix()
	    h := md5.New()
	    io.WriteString(h, strconv.FormatInt(crutime, 10))
	    token := fmt.Sprintf("%x", h.Sum(nil))
	    t, _ := template.ParseFiles("templates/resize.tpl")

	    t.Execute(w, token)
	} else {
	    r.ParseMultipartForm(32 << 20)
	    file, handler, err := r.FormFile("uploadfile")
	    if err != nil {
	        fmt.Println(err)
	        return
	    }
	    defer file.Close()
	    fmt.Fprintf(w, "%v", handler.Header)
	    f, err := os.OpenFile("./static/img/gallery/"+handler.Filename, os.O_WRONLY|os.O_CREATE, 0666)
	    if err != nil {
	        fmt.Println(err)
	        return
	    }

	    io.Copy(f, file)

	    f.Close()

	    // resize and save two images filled by 830x360 and 110x48 pixels size

	    src, err := imaging.Open(fmt.Sprintf("./static/img/gallery/%s", handler.Filename))
	    if err != nil {
	        log.Fatalf("Open failed: %v", err)
	    }

	    sliderImageFill := imaging.Fill(src, 830, 360, imaging.Center, imaging.Lanczos)
	    err = imaging.Save(sliderImageFill, fmt.Sprintf("./static/data0/images/%s", handler.Filename))
	    if err != nil {
	        log.Fatalf("Save failed: %v", err)
	    }
	    tooltipImageFill := imaging.Fill(src, 110, 48, imaging.Center, imaging.Lanczos)
	    err = imaging.Save(tooltipImageFill, fmt.Sprintf("./static/data0/tooltips/%s", handler.Filename))
	    if err != nil {
	        log.Fatalf("Save failed: %v", err)
	    }

			thumbnailImageFill := imaging.Fill(src, 128, 128, imaging.Center, imaging.Lanczos)
	    err = imaging.Save(thumbnailImageFill, fmt.Sprintf("./static/img/thumbnails/%s", handler.Filename))
	    if err != nil {
	        log.Fatalf("Save failed: %v", err)
	    }
	}
}
