FROM mysql:8.0

# Better charset + case-insensitive search (WordPress friendly)
COPY my.cnf /etc/mysql/conf.d/my.cnf

# Optional: seed existing site via dump(s)
# Any .sql in /docker-entrypoint-initdb.d is auto-run on first boot
COPY init/*.sql /docker-entrypoint-initdb.d/

# No extra CMD needed; base image handles mysqld startup
