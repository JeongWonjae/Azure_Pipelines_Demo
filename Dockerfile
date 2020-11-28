FROM nginx
MAINTAINER WONJAE
WORKDIR /usr/share/nginx/html
COPY ./index.html .
EXPOSE 80
RUN echo 'Finished'