FROM node:18-alpine
WORKDIR /usr/src/app
COPY package.json .
RUN npm install
COPY app.js .
RUN npm install express
EXPOSE 3000
CMD [ "node", "app.js" ]