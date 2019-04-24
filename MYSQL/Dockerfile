FROM mysql:5.7
EXPOSE 3306
ENV MYSQL_ALLOW_EMPTY_PASSWORD YES
COPY setup.sh /mysql/setup.sh
COPY schema.sql /mysql/schema.sql
COPY privileges.sql /mysql/privileges.sql

CMD [ "sh","/mysql/setup.sh" ]
