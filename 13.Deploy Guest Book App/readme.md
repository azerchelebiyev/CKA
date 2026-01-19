BACK-END TIER
1. Create a deployment named redis-master for Redis master.  
Replicas count should be 1.  
Container name should be master-redis-devops and it should use image redis.  
Request resources as CPU should be 100m and Memory should be 100Mi.  
Container port should be redis default port i.e 6379.
2. Create a service named redis-master for Redis master. Port and targetPort should be Redis default port i.e 6379.
3. Create another deployment named redis-slave for Redis slave.  
Replicas count should be 2.  
Container name should be slave-redis-devops and it should use gcr.io/google_samples/gb-redisslave:v3 image.  
Requests resources as CPU should be 100m and Memory should be 100Mi.  
Define an environment variable named GET_HOSTS_FROM and its value should be dns.  
Container port should be Redis default port i.e 6379.  
4. Create another service named redis-slave. It should use Redis default port i.e 6379.  

FRONT END TIER
1. Create a deployment named frontend.  
Replicas count should be 3.  
Container name should be php-redis-devops and it should use gcr.io/google-samples/gb-frontend@sha256:a908df8486ff66f2c4daa0d3d8a2fa09846a1fc8efd65649c0109695c7c5cbff image.  
Request resources as CPU should be 100m and Memory should be 100Mi.  
Define an environment variable named as GET_HOSTS_FROM and its value should be dns.  
Container port should be 80.  
2. Create a service named frontend. Its type should be NodePort, port should be 80 and its nodePort should be 30009.
