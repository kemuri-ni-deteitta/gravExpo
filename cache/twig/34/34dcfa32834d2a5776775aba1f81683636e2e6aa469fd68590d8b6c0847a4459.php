<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_58a766b00a7d3fc8f1fdba937db60305f7924ed980cc4bb70df332a36766d82e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('assets', $context, $blocks);
        // line 52
        echo "
<script>
// ===== NAVBAR TIMING CONFIGURATION =====
// Adjust these values to change how long dropdowns stay open
const PRIMARY_DROPDOWN_DELAY = 0;      // No delay - immediate hiding for main dropdowns
const CHILD_DROPDOWN_DELAY = 0;        // No delay - immediate hiding for sub-dropdowns
// ======================================

// Enhanced dropdown navigation with click-to-expand and longer hover delays
let dropdownTimeouts = new Map();
let clickedDropdowns = new Set();
let clickedChildDropdowns = new Set();

// Handle dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleDropdownClick(event, element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
            // Remove visual indicator
            dropdown.style.border = '';
            dropdown.style.boxShadow = '';
        } else {
            // Open dropdown
            clickedDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(180deg)';
            
            // Add visual indicator that dropdown is click-opened
            dropdown.style.border = '2px solid #ff6600';
            dropdown.style.boxShadow = '0 4px 12px rgba(255, 102, 0, 0.3)';
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Handle child dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleChildDropdownClick(event, element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedChildDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedChildDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateX(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        } else {
            // Open dropdown
            clickedChildDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateX(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(90deg)';
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Close all open dropdowns
function closeAllDropdowns() {
    console.log('closeAllDropdowns called');
    
    // Close all clicked dropdowns
    clickedDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
            // Remove visual indicator
            dropdown.style.setProperty('border', '', 'important');
            dropdown.style.setProperty('box-shadow', '', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedDropdowns.clear();
    console.log('Cleared clickedDropdowns, size:', clickedDropdowns.size);
    
    // Close all clicked child dropdowns
    clickedChildDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.child-dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedChildDropdowns.clear();
    console.log('Cleared clickedChildDropdowns, size:', clickedChildDropdowns.size);
    
    // Clear all timeouts
    dropdownTimeouts.forEach(function(timeout) {
        clearTimeout(timeout);
    });
    dropdownTimeouts.clear();
    console.log('Cleared all timeouts, size:', dropdownTimeouts.size);
    
    // Force close all visible dropdowns
    const allDropdowns = document.querySelectorAll('.dropdown-menu, .child-dropdown-menu');
    allDropdowns.forEach(function(dropdown) {
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
    });
    console.log('Force closed all dropdowns, count:', allDropdowns.length);
}

// Legacy toggle functions for backward compatibility
function toggleDropdown(event, element) {
    handleDropdownClick(event, element);
}

function toggleChildDropdown(event, element) {
    handleChildDropdownClick(event, element);
}

function showDropdown(element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    // Immediately close all other dropdowns when hovering over a new menu item
    const allNavItems = document.querySelectorAll('#custom-header nav ul li');
    allNavItems.forEach(function(otherItem) {
        if (otherItem !== element) {
            const otherDropdown = otherItem.querySelector('.dropdown-menu');
            if (otherDropdown) {
                // Immediately hide other dropdowns
                otherDropdown.style.setProperty('display', 'none', 'important');
                otherDropdown.style.setProperty('opacity', '0', 'important');
                otherDropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                otherDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other items
                if (dropdownTimeouts.has(otherItem)) {
                    clearTimeout(dropdownTimeouts.get(otherItem));
                    dropdownTimeouts.delete(otherItem);
                }
            }
        }
    });
    
    // Also close all child dropdowns
    const allChildDropdowns = document.querySelectorAll('.child-dropdown-menu');
    allChildDropdowns.forEach(function(childDropdown) {
        childDropdown.style.setProperty('display', 'none', 'important');
        childDropdown.style.setProperty('opacity', '0', 'important');
        childDropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
        childDropdown.style.setProperty('pointer-events', 'none', 'important');
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately with !important to override inline styles
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateY(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    
    // Ensure proper positioning and visibility
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100001', 'important');
    dropdown.style.setProperty('top', '100%', 'important'); // Position directly below the parent li element
    dropdown.style.setProperty('left', '0', 'important');
    dropdown.style.setProperty('margin-top', '-8px', 'important'); // Remove the gap by overlapping much more aggressively
    
    // Remove any potential clipping
    dropdown.style.setProperty('overflow', 'visible', 'important');
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-top', 'none', 'important'); // Remove top border to connect with navbar
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-top-right-radius', '0', 'important');
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(180deg)';
    
    // Create an invisible bridge between nav item and dropdown to prevent gaps
    const bridge = document.createElement('div');
    bridge.style.cssText = `
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        width: 100% !important;
        height: 10px !important;
        background: transparent !important;
        z-index: 100000 !important;
        pointer-events: auto !important;
    `;
    element.appendChild(bridge);
    
    // Add hover listeners to the dropdown itself
    dropdown.addEventListener('mouseenter', function() {
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    dropdown.addEventListener('mouseleave', function() {
        hideDropdown(element);
    });
    
    // Add hover listeners to the bridge
    bridge.addEventListener('mouseenter', function() {
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    bridge.addEventListener('mouseleave', function() {
        hideDropdown(element);
    });
}

function hideDropdown(element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    console.log('hideDropdown called for:', element.textContent.trim());
    
    // Don't hide clicked dropdowns
    if (clickedDropdowns.has(element)) {
        console.log('Not hiding - dropdown is clicked');
        return;
    }
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
        console.log('Cleared existing timeout');
    }
    
    // Hide immediately (no delay)
    console.log('Hiding dropdown immediately for:', element.textContent.trim());
    dropdown.style.setProperty('display', 'none', 'important');
    dropdown.style.setProperty('opacity', '0', 'important');
    dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
    dropdown.style.setProperty('pointer-events', 'none', 'important');
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(0deg)';
    
    // Remove the bridge element
    const bridge = element.querySelector('div[style*=\"position: absolute\"]');
    if (bridge) {
        bridge.remove();
    }
}

function showChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    // Immediately close all other child dropdowns when hovering over a new child item
    const allChildItems = document.querySelectorAll('#custom-header nav ul li li');
    allChildItems.forEach(function(otherChildItem) {
        if (otherChildItem !== element) {
            const otherChildDropdown = otherChildItem.querySelector('.child-dropdown-menu');
            if (otherChildDropdown) {
                // Immediately hide other child dropdowns
                otherChildDropdown.style.setProperty('display', 'none', 'important');
                otherChildDropdown.style.setProperty('opacity', '0', 'important');
                otherChildDropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                otherChildDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherChildItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other child items
                if (dropdownTimeouts.has(otherChildItem)) {
                    clearTimeout(dropdownTimeouts.get(otherChildItem));
                    dropdownTimeouts.delete(otherChildItem);
                }
            }
        }
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedChildDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately with !important to override inline styles
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateX(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100002', 'important');
    dropdown.style.setProperty('left', '100%', 'important'); // Position directly to the right
    dropdown.style.setProperty('top', '0', 'important'); // Align with parent item
    dropdown.style.setProperty('margin-left', '-1px', 'important'); // Remove horizontal gap
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(90deg)';
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-left', 'none', 'important'); // Remove left border to connect
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-bottom-left-radius', '0', 'important');
}

function hideChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    // Don't hide clicked dropdowns
    if (clickedChildDropdowns.has(element)) return;
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Hide immediately (no delay)
    dropdown.style.setProperty('display', 'none', 'important');
    dropdown.style.setProperty('opacity', '0', 'important');
    dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
    dropdown.style.setProperty('pointer-events', 'none', 'important');
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(0deg)';
}

// Enhanced hover behavior for better UX
document.addEventListener('DOMContentLoaded', function() {
    // Ensure all dropdowns are closed on page load
    closeAllDropdowns();
    
    // Target navigation elements in the custom header
    const navItems = document.querySelectorAll('#custom-header nav ul li');
    
    navItems.forEach(function(item) {
        const dropdown = item.querySelector('.dropdown-menu');
        if (!dropdown) return;
        
        // Create an invisible hover area for better navigation
        const hoverArea = document.createElement('div');
        hoverArea.style.cssText = `
            position: absolute !important;
            top: -10px !important;
            left: -10px !important;
            right: -10px !important;
            bottom: -10px !important;
            z-index: 100000 !important;
            pointer-events: none !important;
        `;
        item.style.position = 'relative';
        item.appendChild(hoverArea);
        
        // Handle second-level dropdowns
        const childItems = dropdown.querySelectorAll('li');
        childItems.forEach(function(childItem) {
            const childDropdown = childItem.querySelector('.child-dropdown-menu');
            if (childDropdown) {
                // Create hover area for child items
                const childHoverArea = document.createElement('div');
                childHoverArea.style.cssText = `
                    position: absolute !important;
                    top: -5px !important;
                    left: -5px !important;
                    right: -5px !important;
                    bottom: -5px !important;
                    z-index: 100001 !important;
                    pointer-events: none !important;
                `;
                childItem.style.position = 'relative';
                childItem.appendChild(childHoverArea);
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        const nav = document.querySelector('#custom-header nav');
        if (nav && !nav.contains(event.target)) {
            closeAllDropdowns();
        }
    });
    
    // Close dropdowns when mouse leaves the entire navigation area
    const nav = document.querySelector('#custom-header nav');
    if (nav) {
        nav.addEventListener('mouseleave', function(event) {
            // Add a small delay to allow moving to dropdown items
            setTimeout(function() {
                // Only close if mouse is still outside the nav area
                const rect = nav.getBoundingClientRect();
                const mouseX = event.clientX;
                const mouseY = event.clientY;
                
                if (mouseX < rect.left || mouseX > rect.right || mouseY < rect.top || mouseY > rect.bottom) {
                    closeAllDropdowns();
                }
            }, 100);
        });
    }
    
    // Close dropdowns when scrolling
    document.addEventListener('scroll', function() {
        closeAllDropdowns();
    });
    
    // Close dropdowns when window loses focus
    window.addEventListener('blur', function() {
        closeAllDropdowns();
    });
    
    // Auto-close clicked dropdowns after a timeout (for better UX)
    setInterval(function() {
        const now = Date.now();
        clickedDropdowns.forEach(function(element) {
            // Auto-close dropdowns that have been open for more than 10 seconds
            if (now - element.lastClickTime > 10000) {
                const dropdown = element.querySelector('.dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedDropdowns.delete(element);
            }
        });
        
        clickedChildDropdowns.forEach(function(element) {
            // Auto-close child dropdowns that have been open for more than 8 seconds
            if (now - element.lastClickTime > 8000) {
                const dropdown = element.querySelector('.child-dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedChildDropdowns.delete(element);
            }
        });
    }, 1000);
});

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeAllDropdowns();
    }
});

// Manual close function for testing - call this from console: forceCloseDropdowns()
window.forceCloseDropdowns = function() {
    console.log('Manual force close called');
    closeAllDropdowns();
};
</script>
</head>
<body id=\"top\" class=\"";
        // line 579
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\" style=\"margin: 0 !important; padding: 0 !important; padding-top: 60px !important;\">
    
    <!-- CUSTOM NAVBAR - COMPLETELY BYPASSING THEME SYSTEM -->
    <div id=\"custom-header\" style=\"position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 60px !important; background: #ffffff !important; border-bottom: 1px solid #e0e0e0 !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important; z-index: 99999 !important; margin: 0 !important; padding: 0 !important;\">
                  <div style=\"height: 60px !important; padding: 0 1.5rem 0 0 !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
     <!-- Logo Section - ABSOLUTE LEFT POSITIONING -->
     <div style=\"position: absolute !important; left: 15px !important; top: 0 !important; display: flex !important; align-items: center !important; height: 60px !important; z-index: 100000 !important;\">
         <a href=\"";
        // line 586
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
             <img src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo/logo.gif"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\" style=\"height: 50px !important; width: auto !important; margin-right: 25px !important;\" />
         </a>
     </div>
    
    <!-- Navigation Menu with Dropdown Support -->
    <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
        <nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
            <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                ";
        // line 595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 596
            echo "                    ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 597
            echo "                    ";
            $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
            // line 598
            echo "                    ";
            $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
            // line 599
            echo "                    <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                        onmouseenter=\"showDropdown(this)\" 
                        onmouseleave=\"hideDropdown(this)\"
                        data-has-children=\"";
            // line 602
            echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
            echo "\">
                        <a href=\"";
            // line 603
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; ";
            if (($context["active_page"] ?? null)) {
                echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
            }
            echo "\" 
                           onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                           onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; ";
            // line 605
            if (($context["active_page"] ?? null)) {
                echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
            }
            echo "\"
                           ";
            // line 606
            if (($context["has_children"] ?? null)) {
                echo "onclick=\"handleDropdownClick(event, this.parentElement)\"";
            }
            echo ">
                            ";
            // line 607
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            if (($context["has_children"] ?? null)) {
                echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; ";
                if (($context["active_page"] ?? null)) {
                    echo "opacity: 1 !important;";
                }
                echo "\">▼</span>";
            }
            // line 608
            echo "                        </a>
                        ";
            // line 609
            if (($context["has_children"] ?? null)) {
                // line 610
                echo "                        <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; ";
                if (($context["show_children"] ?? null)) {
                    echo "display: block !important;";
                } else {
                    echo "display: none !important;";
                }
                echo " z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: -8px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;\">
                            ";
                // line 611
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 612
                    echo "                                ";
                    $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                    // line 613
                    echo "                                ";
                    $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                    // line 614
                    echo "                                <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                                    onmouseenter=\"showChildDropdown(this)\" 
                                    onmouseleave=\"hideChildDropdown(this)\"
                                    data-has-children=\"";
                    // line 617
                    echo ((($context["child_has_children"] ?? null)) ? ("true") : ("false"));
                    echo "\">
                                    <a href=\"";
                    // line 618
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                    echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                    if (($context["child_active"] ?? null)) {
                        echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
                    }
                    echo "\"
                                       onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                       onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                    // line 620
                    if (($context["child_active"] ?? null)) {
                        echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
                    }
                    echo "\"
                                       ";
                    // line 621
                    if (($context["child_has_children"] ?? null)) {
                        echo "onclick=\"handleChildDropdownClick(event, this.parentElement)\"";
                    }
                    echo ">
                                        ";
                    // line 622
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                    if (($context["child_has_children"] ?? null)) {
                        echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; ";
                        if (($context["child_active"] ?? null)) {
                            echo "opacity: 1 !important;";
                        }
                        echo "\">▶</span>";
                    }
                    // line 623
                    echo "                                    </a>
                                    ";
                    // line 624
                    if (($context["child_has_children"] ?? null)) {
                        // line 625
                        echo "                                    <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                        ";
                        // line 626
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                            // line 627
                            echo "                                            ";
                            $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                            // line 628
                            echo "                                            <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                                <a href=\"";
                            // line 629
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                            echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.8rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                            if (($context["grandchild_active"] ?? null)) {
                                echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
                            }
                            echo "\"
                                                   onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                                   onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                            // line 631
                            if (($context["grandchild_active"] ?? null)) {
                                echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
                            }
                            echo "\">
                                                    ";
                            // line 632
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 636
                        echo "                                    </ul>
                                    ";
                    }
                    // line 638
                    echo "                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 640
                echo "                        </ul>
                        ";
            }
            // line 642
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "            </ul>
        </nav>
    </div>
    </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    ";
        // line 651
        $this->displayBlock('header', $context, $blocks);
        // line 656
        echo "
    ";
        // line 657
        $this->displayBlock('hero', $context, $blocks);
        // line 658
        echo "
        <section id=\"start\">
        ";
        // line 660
        $this->displayBlock('body', $context, $blocks);
        // line 670
        echo "        </section>

    </div>

    ";
        // line 674
        $this->displayBlock('footer', $context, $blocks);
        // line 677
        echo "
    ";
        // line 678
        $this->displayBlock('mobile', $context, $blocks);
        // line 690
        echo "
";
        // line 691
        $this->displayBlock('bottom', $context, $blocks);
        // line 694
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 9
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 10
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 23
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 24
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/oxygen-nav.css"], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 34
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 35
        echo "    ";
        // line 36
        echo "    
    ";
        // line 38
        echo "    ";
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 39
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropotron", []), "enabled", [])) {
            // line 40
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/dropotron@1.4.3/jquery.dropotron.min.js", 1 => ["group" => "bottom"]], "method");
            // line 41
            echo "    ";
        }
        // line 42
        echo "    
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "skel", []), "enabled", [])) {
            // line 44
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/skel@3.0.1/src/skel.min.js", 1 => ["group" => "bottom"]], "method");
            // line 45
            echo "    ";
        }
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 48
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 49
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 50
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 579
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 651
    public function block_header($context, array $blocks = [])
    {
        // line 652
        echo "        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    ";
    }

    // line 657
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 660
    public function block_body($context, array $blocks = [])
    {
        // line 661
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 662
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 663
        $this->displayBlock('messages', $context, $blocks);
        // line 666
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 663
    public function block_messages($context, array $blocks = [])
    {
        // line 664
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 664);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 665
        echo "                    ";
    }

    // line 674
    public function block_footer($context, array $blocks = [])
    {
        // line 675
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 675)->display($context);
        // line 676
        echo "    ";
    }

    // line 678
    public function block_mobile($context, array $blocks = [])
    {
        // line 679
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 682
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 682)->display(twig_array_merge($context, ["mobile" => true]));
        // line 683
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 685
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 685)->display(twig_array_merge($context, ["tree" => true]));
        // line 686
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 691
    public function block_bottom($context, array $blocks = [])
    {
        // line 692
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1097 => 692,  1094 => 691,  1087 => 686,  1085 => 685,  1081 => 683,  1079 => 682,  1074 => 679,  1071 => 678,  1067 => 676,  1064 => 675,  1061 => 674,  1057 => 665,  1046 => 664,  1043 => 663,  1034 => 666,  1032 => 663,  1028 => 662,  1025 => 661,  1022 => 660,  1017 => 657,  1010 => 652,  1007 => 651,  1001 => 579,  994 => 50,  989 => 49,  986 => 48,  976 => 45,  973 => 44,  971 => 43,  968 => 42,  965 => 41,  962 => 40,  959 => 39,  956 => 38,  953 => 36,  951 => 35,  948 => 34,  945 => 33,  942 => 32,  939 => 31,  934 => 28,  931 => 27,  928 => 26,  925 => 25,  920 => 24,  915 => 23,  912 => 22,  909 => 21,  902 => 18,  898 => 17,  895 => 16,  893 => 15,  882 => 11,  879 => 10,  876 => 9,  863 => 694,  861 => 691,  858 => 690,  856 => 678,  853 => 677,  851 => 674,  845 => 670,  843 => 660,  839 => 658,  837 => 657,  834 => 656,  832 => 651,  823 => 644,  816 => 642,  812 => 640,  805 => 638,  801 => 636,  791 => 632,  785 => 631,  776 => 629,  773 => 628,  770 => 627,  766 => 626,  763 => 625,  761 => 624,  758 => 623,  749 => 622,  743 => 621,  737 => 620,  728 => 618,  724 => 617,  719 => 614,  716 => 613,  713 => 612,  709 => 611,  700 => 610,  698 => 609,  695 => 608,  686 => 607,  680 => 606,  674 => 605,  665 => 603,  661 => 602,  656 => 599,  653 => 598,  650 => 597,  647 => 596,  643 => 595,  630 => 587,  626 => 586,  616 => 579,  87 => 52,  85 => 48,  82 => 47,  80 => 31,  77 => 30,  75 => 21,  72 => 20,  70 => 9,  65 => 7,  61 => 5,  59 => 3,  57 => 2,  55 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress) %}{% endif %}
    {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/oxygen-nav.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {# Removed init.js since we're using inline JavaScript for dropdowns #}
    
    {# Load external libraries based on theme config #}
    {% set theme_config = attribute(config.themes, config.system.pages.theme) %}
    {% if theme_config.dropotron.enabled %}
        {% do assets.addJs('https://cdn.jsdelivr.net/npm/dropotron@1.4.3/jquery.dropotron.min.js', {group: 'bottom'}) %}
    {% endif %}
    
    {% if theme_config.skel.enabled %}
        {% do assets.addJs('https://cdn.jsdelivr.net/npm/skel@3.0.1/src/skel.min.js', {group: 'bottom'}) %}
    {% endif %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}

<script>
// ===== NAVBAR TIMING CONFIGURATION =====
// Adjust these values to change how long dropdowns stay open
const PRIMARY_DROPDOWN_DELAY = 0;      // No delay - immediate hiding for main dropdowns
const CHILD_DROPDOWN_DELAY = 0;        // No delay - immediate hiding for sub-dropdowns
// ======================================

// Enhanced dropdown navigation with click-to-expand and longer hover delays
let dropdownTimeouts = new Map();
let clickedDropdowns = new Set();
let clickedChildDropdowns = new Set();

// Handle dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleDropdownClick(event, element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateY(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
            // Remove visual indicator
            dropdown.style.border = '';
            dropdown.style.boxShadow = '';
        } else {
            // Open dropdown
            clickedDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(180deg)';
            
            // Add visual indicator that dropdown is click-opened
            dropdown.style.border = '2px solid #ff6600';
            dropdown.style.boxShadow = '0 4px 12px rgba(255, 102, 0, 0.3)';
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Handle child dropdown click - only prevent navigation if clicking on arrow or dropdown is already open
function handleChildDropdownClick(event, element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    const arrow = element.querySelector('.dropdown-arrow');
    const isDropdownOpen = clickedChildDropdowns.has(element);
    const clickedOnArrow = event.target === arrow || arrow.contains(event.target);
    
    // If dropdown is already open or clicking on arrow, toggle it
    if (isDropdownOpen || clickedOnArrow) {
        event.preventDefault();
        event.stopPropagation();
        
        if (isDropdownOpen) {
            // Close dropdown
            clickedChildDropdowns.delete(element);
            dropdown.style.display = 'none';
            dropdown.style.opacity = '0';
            dropdown.style.transform = 'translateX(-10px)';
            dropdown.style.pointerEvents = 'none';
            if (arrow) arrow.style.transform = 'rotate(0deg)';
        } else {
            // Open dropdown
            clickedChildDropdowns.add(element);
            element.lastClickTime = Date.now(); // Track when it was clicked
            dropdown.style.display = 'block';
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateX(0)';
            dropdown.style.pointerEvents = 'auto';
            if (arrow) arrow.style.transform = 'rotate(90deg)';
        }
    } else {
        // If dropdown is closed and not clicking on arrow, allow navigation
        // Close any other open dropdowns before navigating
        closeAllDropdowns();
    }
}

// Close all open dropdowns
function closeAllDropdowns() {
    console.log('closeAllDropdowns called');
    
    // Close all clicked dropdowns
    clickedDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
            // Remove visual indicator
            dropdown.style.setProperty('border', '', 'important');
            dropdown.style.setProperty('box-shadow', '', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedDropdowns.clear();
    console.log('Cleared clickedDropdowns, size:', clickedDropdowns.size);
    
    // Close all clicked child dropdowns
    clickedChildDropdowns.forEach(function(element) {
        const dropdown = element.querySelector('.child-dropdown-menu');
        const arrow = element.querySelector('.dropdown-arrow');
        if (dropdown) {
            dropdown.style.setProperty('display', 'none', 'important');
            dropdown.style.setProperty('opacity', '0', 'important');
            dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
            dropdown.style.setProperty('pointer-events', 'none', 'important');
        }
        if (arrow) arrow.style.transform = 'rotate(0deg)';
    });
    clickedChildDropdowns.clear();
    console.log('Cleared clickedChildDropdowns, size:', clickedChildDropdowns.size);
    
    // Clear all timeouts
    dropdownTimeouts.forEach(function(timeout) {
        clearTimeout(timeout);
    });
    dropdownTimeouts.clear();
    console.log('Cleared all timeouts, size:', dropdownTimeouts.size);
    
    // Force close all visible dropdowns
    const allDropdowns = document.querySelectorAll('.dropdown-menu, .child-dropdown-menu');
    allDropdowns.forEach(function(dropdown) {
        dropdown.style.setProperty('display', 'none', 'important');
        dropdown.style.setProperty('opacity', '0', 'important');
        dropdown.style.setProperty('pointer-events', 'none', 'important');
    });
    console.log('Force closed all dropdowns, count:', allDropdowns.length);
}

// Legacy toggle functions for backward compatibility
function toggleDropdown(event, element) {
    handleDropdownClick(event, element);
}

function toggleChildDropdown(event, element) {
    handleChildDropdownClick(event, element);
}

function showDropdown(element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    // Immediately close all other dropdowns when hovering over a new menu item
    const allNavItems = document.querySelectorAll('#custom-header nav ul li');
    allNavItems.forEach(function(otherItem) {
        if (otherItem !== element) {
            const otherDropdown = otherItem.querySelector('.dropdown-menu');
            if (otherDropdown) {
                // Immediately hide other dropdowns
                otherDropdown.style.setProperty('display', 'none', 'important');
                otherDropdown.style.setProperty('opacity', '0', 'important');
                otherDropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                otherDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other items
                if (dropdownTimeouts.has(otherItem)) {
                    clearTimeout(dropdownTimeouts.get(otherItem));
                    dropdownTimeouts.delete(otherItem);
                }
            }
        }
    });
    
    // Also close all child dropdowns
    const allChildDropdowns = document.querySelectorAll('.child-dropdown-menu');
    allChildDropdowns.forEach(function(childDropdown) {
        childDropdown.style.setProperty('display', 'none', 'important');
        childDropdown.style.setProperty('opacity', '0', 'important');
        childDropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
        childDropdown.style.setProperty('pointer-events', 'none', 'important');
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately with !important to override inline styles
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateY(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    
    // Ensure proper positioning and visibility
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100001', 'important');
    dropdown.style.setProperty('top', '100%', 'important'); // Position directly below the parent li element
    dropdown.style.setProperty('left', '0', 'important');
    dropdown.style.setProperty('margin-top', '-8px', 'important'); // Remove the gap by overlapping much more aggressively
    
    // Remove any potential clipping
    dropdown.style.setProperty('overflow', 'visible', 'important');
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-top', 'none', 'important'); // Remove top border to connect with navbar
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-top-right-radius', '0', 'important');
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(180deg)';
    
    // Create an invisible bridge between nav item and dropdown to prevent gaps
    const bridge = document.createElement('div');
    bridge.style.cssText = `
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        width: 100% !important;
        height: 10px !important;
        background: transparent !important;
        z-index: 100000 !important;
        pointer-events: auto !important;
    `;
    element.appendChild(bridge);
    
    // Add hover listeners to the dropdown itself
    dropdown.addEventListener('mouseenter', function() {
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    dropdown.addEventListener('mouseleave', function() {
        hideDropdown(element);
    });
    
    // Add hover listeners to the bridge
    bridge.addEventListener('mouseenter', function() {
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    bridge.addEventListener('mouseleave', function() {
        hideDropdown(element);
    });
}

function hideDropdown(element) {
    const dropdown = element.querySelector('.dropdown-menu');
    if (!dropdown) return;
    
    console.log('hideDropdown called for:', element.textContent.trim());
    
    // Don't hide clicked dropdowns
    if (clickedDropdowns.has(element)) {
        console.log('Not hiding - dropdown is clicked');
        return;
    }
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
        console.log('Cleared existing timeout');
    }
    
    // Hide immediately (no delay)
    console.log('Hiding dropdown immediately for:', element.textContent.trim());
    dropdown.style.setProperty('display', 'none', 'important');
    dropdown.style.setProperty('opacity', '0', 'important');
    dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
    dropdown.style.setProperty('pointer-events', 'none', 'important');
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(0deg)';
    
    // Remove the bridge element
    const bridge = element.querySelector('div[style*=\"position: absolute\"]');
    if (bridge) {
        bridge.remove();
    }
}

function showChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    // Immediately close all other child dropdowns when hovering over a new child item
    const allChildItems = document.querySelectorAll('#custom-header nav ul li li');
    allChildItems.forEach(function(otherChildItem) {
        if (otherChildItem !== element) {
            const otherChildDropdown = otherChildItem.querySelector('.child-dropdown-menu');
            if (otherChildDropdown) {
                // Immediately hide other child dropdowns
                otherChildDropdown.style.setProperty('display', 'none', 'important');
                otherChildDropdown.style.setProperty('opacity', '0', 'important');
                otherChildDropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                otherChildDropdown.style.setProperty('pointer-events', 'none', 'important');
                
                // Reset arrow
                const otherArrow = otherChildItem.querySelector('.dropdown-arrow');
                if (otherArrow) otherArrow.style.transform = 'rotate(0deg)';
                
                // Clear any timeouts for other child items
                if (dropdownTimeouts.has(otherChildItem)) {
                    clearTimeout(dropdownTimeouts.get(otherChildItem));
                    dropdownTimeouts.delete(otherChildItem);
                }
            }
        }
    });
    
    // Don't interfere with clicked dropdowns
    if (clickedChildDropdowns.has(element)) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately with !important to override inline styles
    dropdown.style.setProperty('display', 'block', 'important');
    dropdown.style.setProperty('opacity', '1', 'important');
    dropdown.style.setProperty('transform', 'translateX(0)', 'important');
    dropdown.style.setProperty('pointer-events', 'auto', 'important');
    dropdown.style.setProperty('visibility', 'visible', 'important');
    dropdown.style.setProperty('position', 'absolute', 'important');
    dropdown.style.setProperty('z-index', '100002', 'important');
    dropdown.style.setProperty('left', '100%', 'important'); // Position directly to the right
    dropdown.style.setProperty('top', '0', 'important'); // Align with parent item
    dropdown.style.setProperty('margin-left', '-1px', 'important'); // Remove horizontal gap
    
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(90deg)';
    
    // Remove debugging styles - restore original appearance
    dropdown.style.setProperty('background', '#ffffff', 'important');
    dropdown.style.setProperty('border', '1px solid rgba(0, 0, 0, 0.1)', 'important');
    dropdown.style.setProperty('border-left', 'none', 'important'); // Remove left border to connect
    dropdown.style.setProperty('border-top-left-radius', '0', 'important');
    dropdown.style.setProperty('border-bottom-left-radius', '0', 'important');
}

function hideChildDropdown(element) {
    const dropdown = element.querySelector('.child-dropdown-menu');
    if (!dropdown) return;
    
    // Don't hide clicked dropdowns
    if (clickedChildDropdowns.has(element)) return;
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Hide immediately (no delay)
    dropdown.style.setProperty('display', 'none', 'important');
    dropdown.style.setProperty('opacity', '0', 'important');
    dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
    dropdown.style.setProperty('pointer-events', 'none', 'important');
    const arrow = element.querySelector('.dropdown-arrow');
    if (arrow) arrow.style.transform = 'rotate(0deg)';
}

// Enhanced hover behavior for better UX
document.addEventListener('DOMContentLoaded', function() {
    // Ensure all dropdowns are closed on page load
    closeAllDropdowns();
    
    // Target navigation elements in the custom header
    const navItems = document.querySelectorAll('#custom-header nav ul li');
    
    navItems.forEach(function(item) {
        const dropdown = item.querySelector('.dropdown-menu');
        if (!dropdown) return;
        
        // Create an invisible hover area for better navigation
        const hoverArea = document.createElement('div');
        hoverArea.style.cssText = `
            position: absolute !important;
            top: -10px !important;
            left: -10px !important;
            right: -10px !important;
            bottom: -10px !important;
            z-index: 100000 !important;
            pointer-events: none !important;
        `;
        item.style.position = 'relative';
        item.appendChild(hoverArea);
        
        // Handle second-level dropdowns
        const childItems = dropdown.querySelectorAll('li');
        childItems.forEach(function(childItem) {
            const childDropdown = childItem.querySelector('.child-dropdown-menu');
            if (childDropdown) {
                // Create hover area for child items
                const childHoverArea = document.createElement('div');
                childHoverArea.style.cssText = `
                    position: absolute !important;
                    top: -5px !important;
                    left: -5px !important;
                    right: -5px !important;
                    bottom: -5px !important;
                    z-index: 100001 !important;
                    pointer-events: none !important;
                `;
                childItem.style.position = 'relative';
                childItem.appendChild(childHoverArea);
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        const nav = document.querySelector('#custom-header nav');
        if (nav && !nav.contains(event.target)) {
            closeAllDropdowns();
        }
    });
    
    // Close dropdowns when mouse leaves the entire navigation area
    const nav = document.querySelector('#custom-header nav');
    if (nav) {
        nav.addEventListener('mouseleave', function(event) {
            // Add a small delay to allow moving to dropdown items
            setTimeout(function() {
                // Only close if mouse is still outside the nav area
                const rect = nav.getBoundingClientRect();
                const mouseX = event.clientX;
                const mouseY = event.clientY;
                
                if (mouseX < rect.left || mouseX > rect.right || mouseY < rect.top || mouseY > rect.bottom) {
                    closeAllDropdowns();
                }
            }, 100);
        });
    }
    
    // Close dropdowns when scrolling
    document.addEventListener('scroll', function() {
        closeAllDropdowns();
    });
    
    // Close dropdowns when window loses focus
    window.addEventListener('blur', function() {
        closeAllDropdowns();
    });
    
    // Auto-close clicked dropdowns after a timeout (for better UX)
    setInterval(function() {
        const now = Date.now();
        clickedDropdowns.forEach(function(element) {
            // Auto-close dropdowns that have been open for more than 10 seconds
            if (now - element.lastClickTime > 10000) {
                const dropdown = element.querySelector('.dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateY(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedDropdowns.delete(element);
            }
        });
        
        clickedChildDropdowns.forEach(function(element) {
            // Auto-close child dropdowns that have been open for more than 8 seconds
            if (now - element.lastClickTime > 8000) {
                const dropdown = element.querySelector('.child-dropdown-menu');
                const arrow = element.querySelector('.dropdown-arrow');
                if (dropdown) {
                    dropdown.style.setProperty('display', 'none', 'important');
                    dropdown.style.setProperty('opacity', '0', 'important');
                    dropdown.style.setProperty('transform', 'translateX(-10px)', 'important');
                    dropdown.style.setProperty('pointer-events', 'none', 'important');
                }
                if (arrow) arrow.style.transform = 'rotate(0deg)';
                clickedChildDropdowns.delete(element);
            }
        });
    }, 1000);
});

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeAllDropdowns();
    }
});

// Manual close function for testing - call this from console: forceCloseDropdowns()
window.forceCloseDropdowns = function() {
    console.log('Manual force close called');
    closeAllDropdowns();
};
</script>
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\" style=\"margin: 0 !important; padding: 0 !important; padding-top: 60px !important;\">
    
    <!-- CUSTOM NAVBAR - COMPLETELY BYPASSING THEME SYSTEM -->
    <div id=\"custom-header\" style=\"position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 60px !important; background: #ffffff !important; border-bottom: 1px solid #e0e0e0 !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important; z-index: 99999 !important; margin: 0 !important; padding: 0 !important;\">
                  <div style=\"height: 60px !important; padding: 0 1.5rem 0 0 !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
     <!-- Logo Section - ABSOLUTE LEFT POSITIONING -->
     <div style=\"position: absolute !important; left: 15px !important; top: 0 !important; display: flex !important; align-items: center !important; height: 60px !important; z-index: 100000 !important;\">
         <a href=\"{{ home_url }}\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
             <img src=\"{{ url('theme://images/logo/logo.gif') }}\" alt=\"{{ site.title }}\" style=\"height: 50px !important; width: auto !important; margin-right: 25px !important;\" />
         </a>
     </div>
    
    <!-- Navigation Menu with Dropdown Support -->
    <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
        <nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
            <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                {% for p in pages.children.visible %}
                    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                    {% set has_children = p.children.visible.count > 0 %}
                    {% set show_children = has_children and (p.active or p.activeChild) %}
                    <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                        onmouseenter=\"showDropdown(this)\" 
                        onmouseleave=\"hideDropdown(this)\"
                        data-has-children=\"{{ has_children ? 'true' : 'false' }}\">
                        <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; {% if active_page %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\" 
                           onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                           onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; {% if active_page %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\"
                           {% if has_children %}onclick=\"handleDropdownClick(event, this.parentElement)\"{% endif %}>
                            {{ p.menu }}{% if has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; {% if active_page %}opacity: 1 !important;{% endif %}\">▼</span>{% endif %}
                        </a>
                        {% if has_children %}
                        <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; {% if show_children %}display: block !important;{% else %}display: none !important;{% endif %} z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: -8px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important;\">
                            {% for child in p.children.visible %}
                                {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                                {% set child_has_children = child.children.visible.count > 0 %}
                                <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                                    onmouseenter=\"showChildDropdown(this)\" 
                                    onmouseleave=\"hideChildDropdown(this)\"
                                    data-has-children=\"{{ child_has_children ? 'true' : 'false' }}\">
                                    <a href=\"{{ child.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if child_active %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\"
                                       onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                       onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if child_active %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\"
                                       {% if child_has_children %}onclick=\"handleChildDropdownClick(event, this.parentElement)\"{% endif %}>
                                        {{ child.menu }}{% if child_has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; {% if child_active %}opacity: 1 !important;{% endif %}\">▶</span>{% endif %}
                                    </a>
                                    {% if child_has_children %}
                                    <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                        {% for grandchild in child.children.visible %}
                                            {% set grandchild_active = (grandchild.active or grandchild.activeChild) ? 'active' : '' %}
                                            <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                                <a href=\"{{ grandchild.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.8rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if grandchild_active %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\"
                                                   onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                                   onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if grandchild_active %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\">
                                                    {{ grandchild.menu }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                    {% endif %}
                                </li>
                            {% endfor %}
                        </ul>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        </nav>
    </div>
    </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    {% block header %}
        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/base.html.twig");
    }
    private $deferred;
}
