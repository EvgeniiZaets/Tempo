<!-- Шаблон добавления товара -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){

        $('.categories').on('change', function(){
            var optionSelected = $(this).find("option:selected");
            var valueSelected  = optionSelected.val();

            $('.subcats').hide();
            $('.subcats[data-cat="'+valueSelected+'"]').show();
        });

    });
</script>


<div class = "headline">Add</div>
<? if ($error): ?>
	<b style="color: red;">Вы неверно ввели логин или пароль!</b>
<? endif; ?>
<div class="center">
    <form action = "index.php?c=item&act=add" method = "post">
	Title:<br/>
	<input type = "text" name = "name" required/><br/>
	Description:<br/>
	<textarea name = "desc" required/></textarea><br/><br />
        Category:<br />
        
        
        <select class = "categories" name = "cats">
        <option></option>
        <? foreach ($categories as $catId => $catArray): ?>
            <? foreach ($catArray as $catName => $subcat): ?>
                    <option value="<?=$catName?>"><?=$catName?></option>
            <? endforeach; ?>
        <? endforeach; ?>
        </select>

        <? foreach ($categories as $catId => $catArray): ?>
            <? foreach ($catArray as $catName => $subcat): ?>
                <select style="display: none" class = "subcats" data-cat = "<?=$catName?>" name = "cats">
                    <? foreach ($subcat as $subcatId => $subcatName): ?>
                        <option value="" data-cat="<?=$subcatName?>"><?=$subcatName?></option>
                    <? endforeach; ?>
                </select>  
            <? endforeach; ?>
        <? endforeach; ?>
        
        <pre><?=print_r($categories)?></pre>
        
        <input type = "submit" name = "add" value = "add" /><br/>
    </form>
</div>