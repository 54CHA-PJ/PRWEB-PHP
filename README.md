"# PRWEB-Symphony" 

## SASS : Compile SCSS to CSS automatically

```cmd
sass --watch scss:css
```

## Browser Sync : Watch for changes in XAMPP server

```cmd
browser-sync start --proxy "localhost/PRWEB" --files "**/*.php, **/*.html, **/*.css, **/*.js"
```

Sometimes, you have to refresh manually oince to begin getting automatic changes

## NPM : Run SASS and Browser Sync together

```cmd
npm run start
```

## Concurrently : Run multiple commands together
    
```cmd
npm install sass
npm install -g browser-sync
npm install --save-dev concurrently
```