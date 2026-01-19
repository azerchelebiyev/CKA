1. Create a deployment using gcr.io/kodekloud/centos-ssh-enabled:node image, replica count must be 2.
2. Create a service to expose this app, the service type must be NodePort, targetPort must be 8080 and nodePort should be 30012.
3. Make sure all the pods are in Running state after the deployment.