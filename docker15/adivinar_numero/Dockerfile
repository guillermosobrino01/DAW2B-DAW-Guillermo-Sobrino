FROM node:18-alpine as react
WORKDIR /app
COPY package.json .
RUN npm install
COPY . .
RUN npm run build

FROM nginx

COPY --from=react /app/dist /usr/share/nginx/html