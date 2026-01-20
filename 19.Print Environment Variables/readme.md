1. Create a pod named print-envars-greeting.
2. Configure spec as, the container name should be print-env-container and use bash image.
3. Create three environment variables:  
a. GREETING and its value should be Welcome to  
b. COMPANY and its value should be Nautilus  
c. GROUP and its value should be Group  
4. Use command ["/bin/sh", "-c", 'echo "$(GREETING) $(COMPANY) $(GROUP)"'], also set its restartPolicy policy to Never to avoid crash loop back.
5. You can check the output using kubectl logs -f print-envars-greeting command.