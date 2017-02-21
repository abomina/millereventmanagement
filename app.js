var express = require("express");

var app = express();

app.set("view engine", "jade");

app.use(express.static("public"));

app.get("/",function(req,res){
	res.render("index");
});
app.get("/security",function(req,res){
	res.render("security");
});
app.get("/parking-traffic",function(req,res){
	res.render("parking-traffic");
});
app.get("/ticket-gate-operations",function(req,res){
	res.render("ticket-gate-operations");
});
app.get("/camping-management",function(req,res){
	res.render("camping-management");
});
app.get("/volunteer-management",function(req,res){
	res.render("volunteer-management");
});
app.get("/portfolio",function(req,res){
	res.render("portfolio");
});
app.get("/about-us",function(req,res){
	res.render("about-us");
});
app.get("/contact-us",function(req,res){
	res.render("contact-us");
});
app.get("/area",function(req,res){
	res.render("area");
});
app.listen(8080);