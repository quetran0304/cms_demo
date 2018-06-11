<?php /** COMMENT MENU LEFT*/?>
<!--MENU LEFT-->
<div class="site-menubar">
    <ul class="site-menu">
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon glyphicon glyphicon-cog" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub sr-only">
            <?php if($this->check->check('view','mod_access','admin')){ ?>
                <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/admin');?>"><span class="site-menu-title"><?php echo lang('menu.user.list');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_access','group')){ ?>
                <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/group');?>"><span class="site-menu-title"><?php echo lang('menu.user.group');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_access','module')){ ?>
                <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/module');?>"><span class="site-menu-title"><?php echo lang('menu.user.module');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_access','permission')){ ?>
                <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/permissio');?>n"><span class="site-menu-title"><?php echo lang('menu.user.permission');?></span></a></li>
            <?php } ?>
          </ul> 
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.content.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub sr-only">
            <?php if($this->check->check('view','mod_content','category')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_content/category')?>"><span class="site-menu-title"><?php echo lang('menu.content.category');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_content','content')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_content/content')?>"><span class="site-menu-title"><?php echo lang('menu.content.content');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_content_static','content_static')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_content_static/content_static')?>"><span class="site-menu-title"><?php echo lang('menu.content.static');?></span></a></li>
            <?php } ?> 
          </ul>
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon glyphicon glyphicon-picture" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.image.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub sr-only">
            <?php if($this->check->check('view','mod_banner','category')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_banner/category')?>"><span class="site-menu-title"><?php echo lang('menu.banner.category');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_banner','banner')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_banner/banner')?>"><span class="site-menu-title"><?php echo lang('menu.banner.banner');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_banner','gallery')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_banner/gallery')?>"><span class="site-menu-title"><?php echo lang('menu.banner.gallery');?></span></a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon glyphicon glyphicon-user" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.user.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub sr-only">
            <?php if($this->check->check('view','mod_user','user')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_user/user')?>"><span class="site-menu-title"><?php echo lang('menu.user.user');?></span></a></li>
            <?php }?>
<!--            --><?php //if($this->check->check('view','mod_user','b2b')){ ?>
<!--            <li class="site-menu-item"><a class="animsition-link" href="--><?php //echo site_url('mod_user/b2b')?><!--"><span class="site-menu-title">--><?php //echo lang('menu.user.b2b');?><!--</span></a></li>-->
<!--            --><?php //}?>
            <?php if($this->check->check('view','mod_contact','contact')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_contact/contact')?>"><span class="site-menu-title"><?php echo lang('menu.user.contact');?></span></a></li>
            <?php }?>
          </ul>
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.address.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub sr-only">
            <?php if($this->check->check('view','mod_address','city')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_address/city')?>"><span class="site-menu-title"><?php echo lang('menu.address.city');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_address','district')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_address/district')?>"><span class="site-menu-title"><?php echo lang('menu.address.district');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_address','ward')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_address/ward')?>"><span class="site-menu-title"><?php echo lang('menu.address.ward');?></span></a></li>
            <?php } ?>
            <?php if($this->check->check('view','mod_address','address')){ ?>
            <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_address/address')?>"><span class="site-menu-title"><?php echo lang('menu.address.address');?></span></a></li>
            <?php } ?>
          </ul> 
        </li>

        
    </ul>
</div>

<!--MENU TOP-->
<?php return;?>
<div class="site-menubar">
    <div class="site-menubar-body">
        <ul class="site-menu">
        <li class="dropdown site-menu-item has-sub">
          <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
            <i class="site-menu-icon glyphicon glyphicon-cog" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <div class="dropdown-menu">
            <div class="site-menu-scroll-wrap is-list">
              <div>
                <div>
                  <ul class="site-menu-sub site-menu-normal-list">
                    <?php if($this->check->check('view','mod_access','admin')){ ?>
                        <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/admin');?>"><span class="site-menu-title"><?php echo lang('menu.user.list');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_access','group')){ ?>
                        <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/group');?>"><span class="site-menu-title"><?php echo lang('menu.user.group');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_access','module')){ ?>
                        <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/module');?>"><span class="site-menu-title"><?php echo lang('menu.user.module');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_access','permission')){ ?>
                        <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_access/permissio');?>n"><span class="site-menu-title"><?php echo lang('menu.user.permission');?></span></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown site-menu-item has-sub">
          <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
            <i class="site-menu-icon glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.content.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <div class="dropdown-menu">
            <div class="site-menu-scroll-wrap is-list">
              <div>
                <div>
                  <ul class="site-menu-sub site-menu-normal-list">
                    <?php if($this->check->check('view','mod_content','category')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_content/category')?>"><span class="site-menu-title"><?php echo lang('menu.content.category');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_content','content')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_content/content')?>"><span class="site-menu-title"><?php echo lang('menu.content.content');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_content_static','content_static')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_content_static/content_static')?>"><span class="site-menu-title"><?php echo lang('menu.content.static');?></span></a></li>
                    <?php } ?> 
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown site-menu-item has-sub">
          <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
            <i class="site-menu-icon glyphicon glyphicon-picture" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.image.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <div class="dropdown-menu">
            <div class="site-menu-scroll-wrap is-list">
              <div>
                <div>
                  <ul class="site-menu-sub site-menu-normal-list">
                    <?php if($this->check->check('view','mod_banner','category')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_banner/category')?>"><span class="site-menu-title"><?php echo lang('menu.banner.category');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_banner','banner')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_banner/banner')?>"><span class="site-menu-title"><?php echo lang('menu.banner.banner');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_banner','gallery')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_banner/gallery')?>"><span class="site-menu-title"><?php echo lang('menu.banner.gallery');?></span></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown site-menu-item has-sub">
          <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
            <i class="site-menu-icon glyphicon glyphicon-user" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.user.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <div class="dropdown-menu">
            <div class="site-menu-scroll-wrap is-list">
              <div>
                <div>
                  <ul class="site-menu-sub site-menu-normal-list">
                    
                    <?php if($this->check->check('view','mod_user','user')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_user/user')?>"><span class="site-menu-title"><?php echo lang('menu.user.user');?></span></a></li>
                    <?php }?>
                    <?php if($this->check->check('view','mod_user','b2b')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_user/b2b')?>"><span class="site-menu-title"><?php echo lang('menu.user.b2b');?></span></a></li>
                    <?php }?>
                    
                    <?php if($this->check->check('view','mod_contact','contact')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_contact/contact')?>"><span class="site-menu-title"><?php echo lang('menu.user.contact');?></span></a></li>
                    <?php }?>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown site-menu-item has-sub">
          <a class="dropdown-toggle" href="javascript:void(0)" data-dropdown-toggle="false">
            <i class="site-menu-icon glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
            <span class="site-menu-title"><?php echo lang('menu.product.manage');?></span>
            <span class="site-menu-arrow"></span>
          </a>
          <div class="dropdown-menu">
            <div class="site-menu-scroll-wrap is-list">
              <div>
                <div>
                  <ul class="site-menu-sub site-menu-normal-list">
                    <?php if($this->check->check('view','mod_product','category')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_product/category')?>"><span class="site-menu-title"><?php echo lang('menu.product.category');?></span></a></li>
                    <?php } ?>
                    <?php if($this->check->check('view','mod_product','product')){ ?>
                    <li class="site-menu-item"><a class="animsition-link" href="<?php echo site_url('mod_product/product')?>"><span class="site-menu-title"><?php echo lang('menu.product.product');?></span></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        
        
        </ul>
    </div>
</div>