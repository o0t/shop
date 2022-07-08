
# To run the site you need to

##  [ 1 ] - Download the code
```bash
λ  git clone https://github.com/o0t/shop.git
```
##  [ 2 ] - Create a database

![unknown](https://user-images.githubusercontent.com/94997828/178013857-409bbf8d-e956-4b25-9abd-35d44f4c8c2b.png)

## [ 3 ] - Edit file  .env 

- DB_DATABASE= Name DB
- DB_USERNAME= UserName DB 
- DB_PASSWORD= Password DB 

![unknddown](https://user-images.githubusercontent.com/94997828/178014612-f618786b-3070-46b7-8305-dea5465a8656.png)

## [ 4 ] - Type the commands to save the new updates

```bash
λ php artisan config:cache
```
### And

```bash
λ php artisan migrate
```
