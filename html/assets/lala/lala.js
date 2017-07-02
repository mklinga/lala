// Compiled by ClojureScript 1.9.671 {}
goog.provide('lala.lala');
goog.require('cljs.core');
cljs.core.enable_console_print_BANG_.call(null);
cljs.core.println.call(null,"Built with Clojurescript and love");
lala.lala.toggle_menu = (function lala$lala$toggle_menu(event){
return (document.querySelector("#navigation")["classList"]).toggle("hide-on-mobile");
});
lala.lala.init_mobile_menu = (function lala$lala$init_mobile_menu(){
return document.querySelector(".menu-toggle").addEventListener("click",lala.lala.toggle_menu);
});
lala.lala.is_without_path = (function lala$lala$is_without_path(location){
return cljs.core.re_find.call(null,/^\/$/,location);
});
lala.lala.add_active = (function lala$lala$add_active(element){
return (element["classList"]).add("active");
});
lala.lala.check_if_active = (function lala$lala$check_if_active(location){
return (function (page){
if(cljs.core._EQ_.call(null,location,page.getAttribute("href"))){
return lala.lala.add_active.call(null,page);
} else {
return null;
}
});
});
lala.lala.set_active_page = (function lala$lala$set_active_page(){
var pages = document.querySelectorAll("#navigation > .nav-links > a");
var location = ((window["location"])["pathname"]);
if(cljs.core.truth_(lala.lala.is_without_path.call(null,location))){
return lala.lala.add_active.call(null,document.querySelector("a[href*=\"index\"]"));
} else {
return pages.forEach(lala.lala.check_if_active.call(null,location));
}
});
lala.lala.load = (function lala$lala$load(){
lala.lala.init_mobile_menu.call(null);

return lala.lala.set_active_page.call(null);
});
(window["onload"] = lala.lala.load);

//# sourceMappingURL=lala.js.map