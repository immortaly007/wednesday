The app is currently hosted on:
https://wednesday.mydud.es

To build the container:
```
docker build --tag immortaly007/wednesday .
```
To run/test it:
```
docker run -d -p 8080:80 -e TZ=Europe/Amsterdam immortaly007/wednesday
```

To publish
```
docker push immortaly007/wednesday
```
