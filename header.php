
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда интсрумента в Дзержинске</title>
    <link rel="icon" href="<?=get_option('mastak_theme_options')['luncher'];?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *{  margin:0;
            padding:0;
            box-sizing:border-box;
            max-width:100%;
            -webkit-font-smoothing: antialiased;
        }
        a{text-decoration:none;}

        html,body{height:100%;font-family: 'Roboto', sans-serif;background-color: #f8f8f8;}
        .app{display:flex;flex-direction:column;height:100%;}
        .app__header, .app__footer{flex-shrink:0;}
        .app__main{flex-grow:1;}

        .header{
            padding:12px 0;
            background-color:#07B4EB;
        }

        .header__top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header__phone-link{
            color: #fff;
            font-weight: 500;
            font-size: 20px;
        }

        .header__bottom{
            color: #fff;
            font-weight: 500;
            font-size: 14px;
            margin-top: 8px;
        }

        .footer{
            padding:20px 0;
            background-color:#707070;
        }

        .footer__top{
            display: flex;
            flex-direction:column;
            align-items: center;
        }

        .footer__bottom{
            color: #fff;
            text-align: center;
            font-size: 10px;
        }

        .footer__losung{
            margin-bottom: 12px;
            color: #fff;
            font-size: 14px;
        }

        .footer__phone-link{
            margin-bottom: 12px;
            color: #fff;
            font-size: 20px;
        }

        .footer__logo{
            margin-bottom: 12px;
        }

        .container{
            padding:0 8px;
        }

        .products-row{
            display: flex;
            flex-wrap:wrap;
            max-width:initial;
            margin-left:-4px;
            margin-right:-4px;
        }

        .product-cell{
            max-width:50%;
            flex:1 0 50%;
            padding: 8px 4px;
        }

        .product{
            border: .5px solid #eee; 
            padding: 8px;
            height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }

        .product__logo{
            width: 100%;
            height: auto;
            object-fit: cover;
            flex-shrink:0;
        }

        .product__title{
            font-size: 12px;
            margin-top: 8px;
            color: #333;
            font-weight: 400;
            flex-grow: 1;
        }
        
        .product__price{
            color: #C60000;
            font-weight: 500;
            font-size: 14px;
            margin-top: 4px;
            text-align: right;
            padding-top: 4px;
            border-top: 0.5px #eee solid;
            flex-shrink:0;
        }

        .product__price:after{
            content: 'руб / сут';
            font-weight: 300;
            color:#666666;
            font-size: 10px;
            margin-left: 4px;
        }

        .main{
            padding: 12px 0;
        }

        @media (min-width:768px){
            .header{
                padding:20px 0;
            }

            .header__bottom{
                font-size: 18px;
                margin-top: 16px;
            }

            .footer__top{
                flex-direction:row;
                justify-content: space-between;
            }

            .footer__phone-link{
                order: 1;
                width: 160px;
                text-align: right;
            }

            .footer__home-link{ 
                width: 160px;
            }

            .footer__losung{
                font-size: 18px;
            }

            .footer__bottom{
                font-size: 12px;
            }

            .container{
                padding:0 12px;
            }

            .products-row{
                margin-left:-6px;
                margin-right:-6px;
            }

            .product-cell{
                max-width:25%;
                flex:1 0 25%;
                padding: 6px 6px;
            }
        }

        @media (min-width:1280px){
            .container{
                padding:0;
                max-width: 1190px;
                margin-left:auto;
                margin-right:auto;
            }

            .product-cell{
                max-width:16.666%;
                flex:1 0 16.666%;
            }
        }
    </style>
       <?php wp_head(); ?>
</head>
<body>
    <div class="app">
        <header class="app__header header">
            <div class="container">
                <div class="header__top">
                    <a href="/" class="header__home-link">
                        <img src="<?=get_option('mastak_theme_options')['logo'];?>" alt="" class="header__logo">
                    </a>
                    <a href="<?=get_option('mastak_theme_options')['tel'];?>" class="header__phone-link"><?=get_option('mastak_theme_options')['tel'];?></a>
                </div>
                <div class="header__bottom">
                    <?=get_option('mastak_theme_options')['contacts_title'];?>
                </div>
            </div>
        </header>
