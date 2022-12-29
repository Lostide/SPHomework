To run this project you need to have docker installed to your system.
1. Go to root folder where docker-compose.yml is located and type 'docker-compose up -d' into cmd
2. Run migrations and install composer dependecies (go into php docker container and run yii migrate and composer install)
3. Test this project on this url http://localhost:8000/app/login