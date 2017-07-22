package main

import (
	"log"
	"net/http"
	"io/ioutil"
	"text/template"
	"gopkg.in/yaml.v2"
    "os"
)

type Config struct {
	Port string `yaml:"port"`
}

var (
    port = os.Getenv("PORT")
    wow_slider_template_name = "wowslider.tpl"
)

func init() {
	yamlFile, err := ioutil.ReadFile("./config.yaml")

	if err != nil {
        log.Println("Error while reading config file ", err)
    }

    var config Config

    err = yaml.Unmarshal(yamlFile, &config)
    if err != nil {
        log.Println("Error while unmarshalling config ", err)
    }
    
    if port=="" {
        port = config.Port
    }
}


func main() {
	http.HandleFunc("/", homePage)
	http.HandleFunc("/article", articlePage)
	http.HandleFunc("/soviet", sovietPage)
	http.HandleFunc("/imperial", imperialPage)
	http.HandleFunc("/uzbek", uzbekPage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static/"))))
    http.Handle("/bower_components/", http.StripPrefix("/bower_components/", http.FileServer(http.Dir("bower_components/"))))
	err := http.ListenAndServe(":"+port, nil)
	if err != nil {
		log.Fatal("Error starting server: ", err)
	}
}

func homePage(w http.ResponseWriter, r *http.Request) {
	template_name := "index.tpl"

	data := struct{}{}

	t, err := template.ParseFiles("templates/" + template_name)
	if err != nil {
		log.Println("template error", err)
	}

	err = t.Execute(w, data)
	if err != nil {
		log.Println("template print error", err)
	}

}

func articlePage(w http.ResponseWriter, r *http.Request) {
    template_name := "article.tpl"

    data := struct{}{}

    t, err := template.ParseFiles("templates/" + template_name, "templates/"+wow_slider_template_name)
    if err != nil {
        log.Println("template error", err)
    }

    err = t.Execute(w, data)
    if err != nil {
        log.Println("template print error", err)    
    }
}

func sovietPage(w http.ResponseWriter, r *http.Request) {
    template_name := "soviet.tpl"

    data := struct{}{}

    t, err := template.ParseFiles("templates/" + template_name)
    if err != nil {
        log.Println("template error", err)
    }

    err = t.Execute(w, data)
    if err != nil {
        log.Println("template print error", err)    
    }
}

func uzbekPage(w http.ResponseWriter, r *http.Request) {
    template_name := "uzbek.tpl"

    data := struct{}{}

    t, err := template.ParseFiles("templates/" + template_name)
    if err != nil {
        log.Println("template error", err)
    }

    err = t.Execute(w, data)
    if err != nil {
        log.Println("template print error", err)    
    }
}

func imperialPage(w http.ResponseWriter, r *http.Request) {
    template_name := "imperial.tpl"

    data := struct{}{}

    t, err := template.ParseFiles("templates/" + template_name)
    if err != nil {
        log.Println("template error", err)
    }

    err = t.Execute(w, data)
    if err != nil {
        log.Println("template print error", err)    
    }
}