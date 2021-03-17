#!/bin/sh
#STARTING MINIKUBE
printf "🤖 \033[1m\033[32m[MINIKUBE] is starting...\n\033[0m"
minikube start --vm-driver=virtualbox --memory=3g 
printf "\033[1m\033[36mOK\n\033[0m"

#LINK MINIKUBE WITH DOCKER
printf "⚓️ \033[1m\033[32m[DOCKER] is linking...\n\033[0m"
eval $(minikube docker-env)
printf "\033[1m\033[36mOK\n\033[0m"

#INSTALL METAL LB
printf "💧 \033[1m\033[32m[METALLB] installing...\n\033[0m"
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml > /dev/null
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml > /dev/null
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)" > /dev/null
printf "\033[1m\033[36mOK\n\033[0m"

#BUILD IMAGES
printf "🚤 \033[1m\033[32m[DOCKER IMAGES] building...\n\033[0m"
printf "\033[1m\033[33mNGINX\033[0m"
docker build -t nginx-image ./srcs/nginx > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"
printf "\033[1m\033[33mMYSQL\033[0m"
docker build -t mysql-image ./srcs/mysql > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"
printf "\033[1m\033[33mWORDPRESS\033[0m"
docker build -t wordpress-image ./srcs/wordpress > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"
printf "\033[1m\033[33mPHPMYADMIN\033[0m"
docker build -t phpmyadmin-image ./srcs/phpmyadmin > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"
printf "\033[1m\033[33mGRAFANA\033[0m"
docker build -t grafana-image ./srcs/grafana > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"
printf "\033[1m\033[33mINFLUXDB\033[0m"
docker build -t influxdb-image ./srcs/influxdb > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"
printf "\033[1m\033[33mFTPS\033[0m"
docker build -t ftps-image ./srcs/ftps > /dev/null
printf "\033[1m\033[36m OK\n\033[0m"

#CREATING PODS
printf "📱 \033[1m\033[32m[PODS] creating...\n\033[0m"
kubectl apply -f srcs/nginx/nginx.yaml > /dev/null
kubectl apply -f srcs/wordpress/wordpress.yaml > /dev/null
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml > /dev/null
kubectl apply -f srcs/metallb/metallb.yaml > /dev/null
kubectl apply -f srcs/mysql/mysql.yaml > /dev/null
kubectl apply -f srcs/grafana/grafana.yaml > /dev/null
kubectl apply -f srcs/influxdb/influxdb.yaml > /dev/null
kubectl apply -f srcs/ftps/ftps.yaml > /dev/null
printf "\033[1m\033[36mOK\n\033[0m"

#LAUNCH DASHBOARD
printf "🚀 \033[1m\033[32m[DASHBOARD] launching...\n\033[0m"
minikube dashboard
