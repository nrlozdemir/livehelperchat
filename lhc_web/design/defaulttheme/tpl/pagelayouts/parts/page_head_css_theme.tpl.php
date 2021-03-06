<?php if (isset($Result['theme']) && $Result['theme'] !== false) : ?>
<?php if (!isset($react)) : ?>
    <style>
<?php endif; ?>
        <?php if ($Result['theme']->buble_visitor_background != '') : ?>
        #messagesBlock div.message-row.response div.msg-body{background-color:#<?php echo htmlspecialchars($Result['theme']->buble_visitor_background)?>;}
        <?php endif;?>

        <?php if ($Result['theme']->buble_visitor_text_color != '') : ?>
        #messagesBlock div.message-row.response div.msg-body,
        #messagesBlock div.message-row.response div.msg-body a.link
        {color:#<?php echo htmlspecialchars($Result['theme']->buble_visitor_text_color)?>;}
        <?php endif;?>

        <?php if ($Result['theme']->buble_visitor_title_color != '') : ?>
        #messagesBlock div.response .vis-tit{color:#<?php echo htmlspecialchars($Result['theme']->buble_visitor_title_color)?>;}
        <?php endif;?>

        <?php if ($Result['theme']->buble_operator_background != '') : ?>
        #messagesBlock div.message-admin div.msg-body{background-color:#<?php echo htmlspecialchars($Result['theme']->buble_operator_background)?>;}
        <?php endif;?>

        <?php if ($Result['theme']->buble_operator_text_color != '') : ?>
        #messagesBlock div.message-admin div.msg-body,
        #messagesBlock div.message-admin div.msg-body a.link{color:#<?php echo htmlspecialchars($Result['theme']->buble_operator_text_color)?>;}
        <?php endif;?>

        <?php if ($Result['theme']->buble_operator_title_color != '') : ?>
        #messagesBlock div.message-admin .op-tit{color:#<?php echo htmlspecialchars($Result['theme']->buble_operator_title_color)?>;}
        <?php endif;?>

        .btn-bot,.btn-bot:hover,.btn-bot:focus,.btn-bot:active{
            <?php if (isset($Result['theme']->bot_configuration_array['bot_button_border']) && $Result['theme']->bot_configuration_array['bot_button_border'] != '') : ?>
            border-color: #<?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_border']);?>!important;
            <?php endif; ?>
            <?php if (isset($Result['theme']->bot_configuration_array['bot_button_text_color']) && $Result['theme']->bot_configuration_array['bot_button_text_color'] != '') : ?>
            color: #<?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_text_color']);?>!important;
            <?php endif; ?>
            <?php if (isset($Result['theme']->bot_configuration_array['bot_button_background']) && $Result['theme']->bot_configuration_array['bot_button_background'] != '') : ?>
            background-color: #<?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_background']);?>!important;
            <?php endif; ?>
            <?php if (isset($Result['theme']->bot_configuration_array['bot_button_border_radius']) && $Result['theme']->bot_configuration_array['bot_button_border_radius'] != '') : ?>
            border-radius: <?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_border_radius']);?>px!important;
            <?php endif; ?>
            <?php if (isset($Result['theme']->bot_configuration_array['bot_button_padding']) && $Result['theme']->bot_configuration_array['bot_button_padding'] != '' && isset($Result['theme']->bot_configuration_array['bot_button_padding_left_right']) && $Result['theme']->bot_configuration_array['bot_button_padding_left_right'] != '') : ?>
            padding: <?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_padding']);?>px <?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_padding_left_right']);?>px!important;
            <?php endif; ?>
            <?php if (isset($Result['theme']->bot_configuration_array['bot_button_fs']) && $Result['theme']->bot_configuration_array['bot_button_fs'] != '') : ?>
            font-size: <?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_fs']);?>px!important;
            <?php endif; ?>
        }

        <?php if (isset($Result['theme']->bot_configuration_array['bot_button_background_hover']) && $Result['theme']->bot_configuration_array['bot_button_background_hover'] != '') : ?>
        .btn-bot:hover,.btn-bot:active,.btn-bot:focus{
            background-color: #<?php echo htmlspecialchars($Result['theme']->bot_configuration_array['bot_button_background_hover']);?>!important;
        }
        <?php endif; ?>

<?php if (isset($react)) : ?>

<?php if (isset($theme->bot_configuration_array['hide_visitor_profile']) && $theme->bot_configuration_array['hide_visitor_profile'] == 1) : ?>
.vis-tit {
    display: none!important;
}
<?php endif; ?>

<?php if (isset($theme->bot_configuration_array['bubble_style_profile']) && $theme->bot_configuration_array['bubble_style_profile'] == 1) : ?>
.user-nick-title,
.op-nick-title
{
    display: none;
}
.op-tit {
    float:left;
    margin-top: 2px;
}

.vis-tit {
    float:right;
    margin-left: 3px!important;
    margin-top: 3px;
}

.op-tit {
    position: absolute;
}

.op-tit i.material-icons,
.vis-tit i.material-icons{
    font-size: 24px;
}

div.message-admin div.msg-body,
div.message-admin div.meta-message{
    margin-left:29px;
}

@media (min-width: 1024px) {
    .profile-msg-pic {
        width: 33px;
    }

    div.message-admin div.msg-body,
    div.message-admin div.meta-message{
        margin-left:42px;
    }
}
<?php endif; ?>

.header-chat {
    background-color: #<?php echo $theme->header_background;?>;
<?php if ($theme->header_height > 0) : ?>
    height: <?php echo $theme->header_height?>px;
<?php endif; ?>

<?php if ($theme->header_padding > 0) : ?>
    padding: <?php echo $theme->header_padding?>px;
<?php endif; ?>
}

.desktop-header,.desktop-body{
    border-color:#<?php echo $theme->widget_border_color?>;
    <?php if ($theme->widget_border_width > 0) : ?>
    border-width: <?php echo $theme->widget_border_width?>px;
    <?php endif; ?>
}


<?php echo $theme->custom_container_css,$theme->custom_widget_css?>

<?php endif; ?>


<?php if (!isset($react)) : ?>
    </style>
<?php endif;?>

<?php endif;?>