
### Docker postgresSQL
```shell
docker run -d --rm --name database -e POSTGRES_USER=admin -e POSTGRES_PASSWORD=admin postgres:9.6
```

```shell
docker run --rm -v $(pwd):/app -w /app --link database karllhughes/php-cli-postgres php index.php
```