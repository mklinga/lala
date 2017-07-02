(ns lala.lala)

(enable-console-print!)

(println "Built with Clojurescript and love")

(defn toggle-menu [event]
  (.toggle
    (aget (.querySelector js/document "#navigation") "classList")
    "hide-on-mobile"))

(defn init-mobile-menu []
  (.addEventListener
    (.querySelector js/document ".menu-toggle")
    "click"
    toggle-menu))

(defn is-without-path [location]
  (re-find #"^/$" location))

(defn add-active [element]
  (.add (aget element "classList") "active"))

(defn check-if-active [location]
  (fn [page]
    (if (= location (.getAttribute page "href"))
      (add-active page))))

(defn set-active-page []
  (let [pages (.querySelectorAll js/document "#navigation > .nav-links > a")
        location (aget (aget js/window "location") "pathname")]
    (if (is-without-path location)
      (add-active (.querySelector js/document "a[href*=\"index\"]"))
      (.forEach pages (check-if-active location)))))

(defn load []
  (init-mobile-menu)
  (set-active-page))

(aset js/window "onload" load)
