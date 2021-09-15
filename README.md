<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>


<font color='yellow'>***Hossein Sheikh Query Filters***</font>

- To use query filters, you can do the following
    - Add QueryFilters trait to model
    - Use existing classes or build query class
    - Use filters() method in model
        ````
            UserModel::query()
                ->filters([
                            \HosseinSheikh\QueryFilters\Name::class,
                            \HosseinSheikh\QueryFilters\Status::class,
                        ])
                ->get()


    
    


