FROM wyveo/nginx-php-fpm:latest

#Copia os arquivos do projeto para a pasta /usr/share/nginx/html
COPY . /usr/share/nginx/html 

#Copia o arquivo de configuração do nginx para a pasta /etc/nginx/conf.d/default.conf
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Define o diretório de trabalho
WORKDIR /usr/share/nginx/html

# Cria um link simbolico para a pasta public 
RUN ln -s public html

# atualiza o apt
RUN apt update; \
    apt install vim -y

#Expõe a porta 80
EXPOSE 80

