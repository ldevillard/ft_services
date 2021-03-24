# ft_services
- EN : https://cdn.intra.42.fr/pdf/pdf/19944/en.subject.pdf
- FR : https://cdn.intra.42.fr/pdf/pdf/19945/fr.subject.pdf
#
Before build it, you have to install Virtual Box for minikube, then :
```
sh setup.sh
```
#
In that project you may use Docker and kubernetes (minikube) to create a cluster with different services :
```
NGINX / WORDPRESS / PHPMYADMIN / FTPS / GRAFANA / MYSQL / INFLUXDB
```
- Using a load balancer : MetalLB
#
### I didn't pretty like this project so i haven't spent a lot of time when this one worked, but here is some useful ressources :
- > https://discuss.kubernetes.io/t/ftps-server-doesnt-work-properly-using-kubernetes/9908
- > https://www.wpbeginner.com/beginners-guide/how-to-edit-wp-config-php-file-in-wordpress/
- > https://linux.die.net/man/5/vsftpd.conf
- > https://harm-smits.github.io/42docs/projects/ft_services
- > https://kubernetes.io/docs/concepts/overview/working-with-objects/kubernetes-objects/
- > https://kubernetes.io/docs/concepts/configuration/secret/
- > https://www.youtube.com/watch?v=fdlZqRZXWOc&list=PLn6POgpklwWq0iz59-px2z-qjDdZKEvWd
- > https://www.youtube.com/watch?v=37VLg7mlHu8&list=PLn6POgpklwWqfzaosSgX2XEKpse5VY2v5