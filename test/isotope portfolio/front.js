(function($) {
    'use strict';

    function columnWidth($container) {
        var w = $container.width(),
            w = Math.floor(parseFloat(window.getComputedStyle($container[0]).width)),
            columnNum = 5,
            columnWidth = 220;
        if (w <= 1795 || w > 1795) {
            columnNum = 8;
        }
        if (w <= 1570) {
            columnNum = 7;
        }
        if (w <= 1345) {
            columnNum = 6;
        }
        if (w <= 1320) {
            columnNum = 5;
        }
        if (w <= 900) {
            columnNum = 4;
        }
        if (w <= 670) {
            columnNum = 3;
        }
        if (w <= 440) {
            columnNum = 2;
        }
        if (w <= 220) {
            columnNum = 1;
        }
        columnWidth = Math.floor(w / columnNum) - Math.ceil((((columnNum - 1) * 5) / columnNum));
        $container.find('.item').each(function() {
            var $item = $(this),
                multiplier_w = $item.attr('class').match(/width(\d)/),
                multiplier_h = $item.attr('class').match(/height(\d)/);
            if (columnWidth <= 160) {
                $item.removeClass('item-meta-data-medium');
                $item.addClass('item-meta-data-small');
            } else if (columnWidth <= 190) {
                $item.removeClass('item-meta-data-small');
                $item.addClass('item-meta-data-medium');
            } else if (columnWidth > 190) {
                $item.removeClass('item-meta-data-small');
                $item.removeClass('item-meta-data-medium');
            }
            if (multiplier_w && w <= 440) {
                multiplier_w[1] = 2;
            }
            if (multiplier_w && w <= 220) {
                multiplier_w[1] = 1;
            }
            if (multiplier_h && w <= 220) {
                multiplier_h[1] = 1;
            }
            if (!$container.hasClass('variable-sizes')) {
                multiplier_w = null;
                multiplier_h = null;
            }
            var width = multiplier_w ? (multiplier_w[1] * columnWidth + ((multiplier_w[1] - 1) * 5)) : columnWidth,
                height = (multiplier_h) ? ((Math.round(columnWidth * 150 / 220) * multiplier_h[1]) + ((multiplier_h[1] - 1) * 5)) : Math.round(columnWidth * 150 / 220);
            $item.css({
                width: width,
                height: height
            });
        });
        return columnWidth;
    }
    $(document).ready(function() {
        $('.wp-block-avaz-isotope').each(function(index, element) {
            var $block = $(this);
            var $container = $(this).find('.ns-container');
            var data = $(this).data();
            data.categories = $(this).find('.ns-filter-category li a:not([data-project-category-id="all"])').map(function() {
                return Number($(this).attr('data-project-category-id'));
            }).get();
            if (!$container.length) {
                return;
            }
            $container.isotope({
                itemSelector: '.item',
                isOriginLeft: !($('body').hasClass('rtl')),
                masonry: {
                    columnWidth: columnWidth($container),
                    gutter: 5
                },
                transitionDuration: '0.8s'
            });
            var updateIsotope = function() {
                $container.isotope({
                    itemSelector: '.item',
                    isOriginLeft: !($('body').hasClass('rtl')),
                    masonry: {
                        columnWidth: columnWidth($container),
                        gutter: 5
                    },
                    transitionDuration: '0.8s'
                });
            };
            $(window).resize(updateIsotope);
            var $optionSets = $('.ns-filters .ns-filter-category'),
                $optionLinks = $optionSets.find('a');
            $optionLinks.on('click', function() {
                var $this = $(this);
                var $container = $this.closest('.wp-block-avaz-isotope').find('.ns-container');
                if ($this.hasClass('selected')) {
                    return false;
                }
                var $optionSet = $this.parents('.ns-filter-category');
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');
                var options = {},
                    key = $optionSet.attr('data-option-key'),
                    value = $this.attr('data-option-value');
                value = value === 'false' ? false : value;
                options[key] = value;
                $container.isotope(options);
                return false;
            });
            $('.wp-block-avaz-isotope').on('click', '.ns-filter-size a', function() {
                var $container = $(this).closest('.wp-block-avaz-isotope').find('.ns-container');
                if ($(this).hasClass('toggle-selected')) {
                    return false;
                }
                $(this).closest('.wp-block-avaz-isotope').find('.ns-filter-size a').removeClass('toggle-selected');
                $(this).addClass('toggle-selected');
                $container.toggleClass('variable-sizes');
                columnWidth($container);
                $container.isotope('layout');
                return false;
            });

            window.global_current_id = window.global_current_id || false;
            var portfolio_page_title = $('title').text();
            var initialUrl = document.location.href;
            var projectsArray = typeof ikonProjectsData !== 'undefined' ? ikonProjectsData.posts : [];
            projectsArray = projectsArray.filter(function(v) {
                var present = false;
                $.each(data.categories, function(index, element) {
                    if (v.categories.includes(element)) {
                        present = true;
                    }
                });
                if (present) {
                    return true;
                } else {
                    return false;
                }
            });

        });
    });
    $(window).load(function() {
        $('.wp-block-avaz-isotope').addClass('visible');
    });
})(jQuery);