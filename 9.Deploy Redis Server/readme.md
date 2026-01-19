1. Create a config map called my-redis-config having maxmemory 2mb in redis-config.
2. Name of the deployment should be redis-deployment, it should use redis:alpine image and container name should be redis-container. Also make sure it has only 1 replica.
3. The container should request for 1 CPU.
4. Mount 2 volumes:
    An Empty directory volume called data at path /redis-master-data.
    A configmap volume called redis-config at path /redis-master.
    The container should expose the port 6379.
5. Finally, redis-deployment should be in an up and running state.