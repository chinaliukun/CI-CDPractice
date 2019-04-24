FROM mysql:5.7
ENV MYSQL_ALLOW_EMPTY_PASSWORD YES
COPY setup.sh /mysql/setup.sh
COPY schema.sql /mysql/shema.sql
COPY privileges.sql /mysql/privileges.sql

CMD [ "sh","/mysql/setup.sh" ]