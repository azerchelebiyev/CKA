1. We already have a secret key file blog.txt under /opt. Create a generic secret named blog.
2. Also create a pod named secret-datacenter.
3. Configure pod's spec as container name should be secret-container-datacenter, image should be ubuntu with latest tag. Use sleep command for container so that it remains in running state. Consume the created secret and mount it under /opt/demo within the container.
4. To verify you can exec into the container secret-container-datacenter, to check the secret key under the mounted path /opt/demo.

kubectl create secret generic blog --from-file=password=/opt/blog.txt