<h2>pagina de produtos</h2>


<section class="main-content">
    
    <div class="row">						
        <div class="span3">								
            <ul class="thumbnails listing-products">
                <div class="product-box">


                    {foreach from=$PRO item=P}
                    <li class="span3">
                        <span class="sale_tag"></span>												
                        <a href="#"><img alt="" src="{$P.prod_img}"></a><br/>
                        <a href="#" class="title">{$P.prod_nome}</a><br/>
                        <a href="#" class="category">Categoria 1</a>
                        <p class="price">{$P.prod_preco}</p>
                    </li>
                    {/foreach}
                
                </div>
            </ul>
        </div>								
            <hr>
            <div class="pagination pagination-small pagination-centered">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>   
    </div>
    
</section>

