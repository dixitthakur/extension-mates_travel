
plugin.tx_matestravel_createtripform {
    view {
        templateRootPaths.0 = EXT:mates_travel/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_matestravel_createtripform.view.templateRootPath}
        partialRootPaths.0 = EXT:mates_travel/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_matestravel_createtripform.view.partialRootPath}
        layoutRootPaths.0 = EXT:mates_travel/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_matestravel_createtripform.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_matestravel_createtripform.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_matestravel_searchtrips {
    view {
        templateRootPaths.0 = EXT:mates_travel/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_matestravel_searchtrips.view.templateRootPath}
        partialRootPaths.0 = EXT:mates_travel/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_matestravel_searchtrips.view.partialRootPath}
        layoutRootPaths.0 = EXT:mates_travel/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_matestravel_searchtrips.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_matestravel_searchtrips.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_matestravel_viewtrips {
    view {
        templateRootPaths.0 = EXT:mates_travel/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_matestravel_viewtrips.view.templateRootPath}
        partialRootPaths.0 = EXT:mates_travel/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_matestravel_viewtrips.view.partialRootPath}
        layoutRootPaths.0 = EXT:mates_travel/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_matestravel_viewtrips.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_matestravel_viewtrips.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_matestravel_viewalltrips {
    view {
        templateRootPaths.0 = EXT:mates_travel/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_matestravel_viewalltrips.view.templateRootPath}
        partialRootPaths.0 = EXT:mates_travel/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_matestravel_viewalltrips.view.partialRootPath}
        layoutRootPaths.0 = EXT:mates_travel/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_matestravel_viewalltrips.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_matestravel_viewalltrips.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_matestravel._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-mates-travel table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-mates-travel table th {
        font-weight:bold;
    }

    .tx-mates-travel table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
