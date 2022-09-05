FROM node:12-alpine

WORKDIR /srv/quant


RUN npm i -g @raftx24/laravel-echo-server

EXPOSE 7999

##ENTRYPOINT ["sh", "/script.sh"]
CMD ["laravel-echo-server", "start"]