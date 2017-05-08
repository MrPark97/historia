package main

import (
	"log"
	"net/http"
	"io/ioutil"
	"text/template"
	"gopkg.in/yaml.v2"
)

var (
	port = "8000"
)

type Config struct {
	Port string `yaml:"port"`
}

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

    port = config.Port
}


func main() {
	http.HandleFunc("/", homePage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static/"))))
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