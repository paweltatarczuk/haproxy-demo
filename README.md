# HAProxy demo

This is an extremely basic example of HAProxy 1.8 setup with:

- HAProxy
- 2x Nginx servers
- 2x PHP-FPM servers
- Syslog-ng

What is included:

- Simple PHP script with random timeout, printing 'client_ip', 'web_ip' and 'php_ip'
- Health checks for both Nginx and PHP backend

## How to use

Run `$ docker-compose up` and visit http://localhost.

You can investigate how HAProxy is handling health checks by disabling
services with `$ docker-compose <php1|php2|web1|web2>` command.
