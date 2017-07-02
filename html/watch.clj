(require 'cljs.build.api)

(cljs.build.api/watch "src"
  {:main 'lala.lala
   :output-dir "assets"
   :output-to "assets/main.js"})
