<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="am-u-lg-4 am-u-sm-10 am-u-lg-offset-0 am-u-sm-offset-0 sidebar-container">
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                Code Poetry
            </span>
        </div>
        <p>
        <img style="width: 60%;display: block;border-radius: 5px;" src="<?php $this->options->avatarUrl(); ?>">
        </p>
        <p>一杯咖啡，一台电脑，一盏夜灯<br>写一段美妙的代码，同大雨合着拍子</p>
        <ul class="list-inline">
            <?php if ($this->options->socialQQ): ?>
            <li>
                <a class="am-icon-btn am-icon-qq" target="_blank" itemtype="url" href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes"></a>
            </li>
            <?php endif; ?>
            <?php if ($this->options->socialWechat): ?>
            <li>
                <a class="am-icon-btn am-icon-wechat" target="_blank" itemtype="url" href="<?php $this->options->socialWechat(); ?>"></a>
            </li>
            <?php endif; ?>
            <?php if ($this->options->socialGithub): ?>
            <li>
                <a class="am-icon-btn am-icon-github" target="_blank" itemtype="url" href="<?php $this->options->socialGithub(); ?>"></a>
            </li>
            <?php endif; ?>
            <?php if ($this->options->socialWeibo): ?>
            <li>
                <a class="am-icon-btn am-icon-weibo" target="_blank" itemtype="url" href="<?php $this->options->socialWeibo(); ?>"></a>
            </li>
            <?php endif; ?>
            <?php if ($this->options->socialTwitter): ?>
            <li>
                <a class="am-icon-btn am-icon-twitter" target="_blank" itemtype="url" href="<?php $this->options->socialTwitter(); ?>"></a>
            </li>
            <?php endif; ?>
        </ul>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                TOPICS
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li class="sidebar-list-item"><a href="{permalink}" title="{description}">{name}  ({count})</a></li>'); ?>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                TAGS
            </span>
        </div>
        <div class="tags">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                ARCHIVES
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li class="sidebar-list-item"><a href="{permalink}">{date}  ({count})</a></li>'); ?>
        </ul>
        </div>
    </section>
</div>
