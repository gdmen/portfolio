#!/bin/sh
while inotifywait -e modify -e create -e delete assets/less; do
    lessc assets/less/bootstrap.less > assets/css/styles.css
    lessc assets/less/responsive.less > assets/css/styles-responsive.css
done
