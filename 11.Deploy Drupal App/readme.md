1) Configure a persistent volume drupal-mysql-pv with hostPath = /drupal-mysql-data (/drupal-mysql-data directory already exists on the worker Node i.e jump host), 5Gi of storage and ReadWriteOnce access mode.
2) Configure one PersistentVolumeClaim named drupal-mysql-pvc with storage request of 3Gi and ReadWriteOnce access mode.
3) Create a deployment drupal-mysql with 1 replica, use mysql:5.7 image. Mount the claimed PVC at /var/lib/mysql.
4) Create a deployment drupal with 1 replica and use drupal:8.6 image.
5) Create a NodePort type service which should be named as drupal-service and nodePort should be 30095.
6) Create a service drupal-mysql-service to expose mysql deployment on port 3306.