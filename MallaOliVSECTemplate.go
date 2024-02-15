package main

import (
	"log"
	"net/http"
	"text/template"
)

type Conference struct {
	School string
	Mascot string
	City string
	State string
	Division string
}

var tmpl = template.Must(template.ParseGlob("templates/*"))

func Schools(w http.ResponseWriter, r *http.Request) {
    SEC := []Conference{
        {School: "Auburn", Mascot: "Tigers", City: "Auburn", State: "AL", Division: "West"},
        {School: "LSU", Mascot: "Fighting Tigers", City: "Baton Rouge", State: "LA", Division: "West"},
        {School: "MSU", Mascot: "Bulldogs", City: "Starkville", State: "MS", Division: "West"},
        {School: "Texas A&M", Mascot: "Aggies", City: "College Station", State: "TX", Division: "West"},
        {School: "Alabama", Mascot: "Crimson Tide", City: "Tuscaloosa", State: "AL", Division: "West"},
        {School: "Arkansas", Mascot: "Razorbacks", City: "Fayetteville", State: "AR", Division: "West"},
        {School: "Florida", Mascot: "Gators", City: "Gainesville", State: "FL", Division: "East"},
        {School: "Georgia", Mascot: "Bulldogs", City: "Athens", State: "GA", Division: "East"},
        {School: "Kentucky", Mascot: "Wildcats", City: "Lexington", State: "KY", Division: "East"},
        {School: "Ole Miss", Mascot: "Rebels", City: "Oxford", State: "MS", Division: "West"},
        {School: "Mizzou", Mascot: "Tigers", City: "Columbia", State: "MO", Division: "East"},
        {School: "South Carolina", Mascot: "Gamecocks", City: "Columbia", State: "SC", Division: "East"},
        {School: "Tennessee", Mascot: "Volunteers", City: "Knoxville", State: "TN", Division: "East"},
        {School: "Vanderbilt", Mascot: "Commodores", City: "Nashville", State: "TN", Division: "East"},
    }
    tmpl.ExecuteTemplate(w, "SECConference", SEC)
}


func main(){
	go log.Println("Server started on http://localhost:8103")
	go http.HandleFunc("/", Schools)
	http.ListenAndServe(":8103", nil)
}