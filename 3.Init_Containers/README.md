1. Create a Deployment named as ic-deploy-xfusion.
2. Configure spec as replicas should be 1, labels app should be ic-xfusion, template's metadata lables app should be the same ic-xfusion.
3. The initContainers should be named as ic-msg-xfusion, use image fedora with latest tag and use command '/bin/bash', '-c' and 'echo Init Done - Welcome to xFusionCorp Industries > /ic/official'. The volume mount should be named as ic-volume-xfusion and mount path should be /ic.
4. Main container should be named as ic-main-xfusion, use image fedora with latest tag and use command '/bin/bash', '-c' and 'while true; do cat /ic/official; sleep 5; done'. The volume mount should be named as ic-volume-xfusion and mount path should be /ic.
5. Volume to be named as ic-volume-xfusion and it should be an emptyDir type.
