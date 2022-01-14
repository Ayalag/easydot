{{-- <body>
    <div align="center">
        <div id="container-form" style="width: 45%;">
        </div>
    </div>

</body>



<script src="https://sandbox.paguelofacil.com/HostedFields/vendor/scripts/WALLET/PFScript.js"></script>

<script>
    const getUrlParam = (key) => new URLSearchParams(window.location.search).get(key);

    pfWallet = pfWallet || {};
    let apiKey = "brEyQRSzMm2UwQa5v0NsobRa3U8nH5xT|DIRkGmcBCZPevCv9w5aj2Y35H";
    let cclw =
        "1930E9ADB324756FBF714E52D7EFB6B67F362B405E5A3FA33579D2D410FC6B2862596A2388CE682B21FACF6E9979B4675B859355812C98FC5B409ED4533DAA3D";

    //   apiKey = "E2f0JaAPu3aN6UYB";
    //   cclw = "15224BE0CBB8EAAC33B53850FF71EAE732253AFCB";
    pfWallet.useAsSandbox(true);

    pfWallet.openService({
        apiKey: apiKey,
        cclw: cclw
    }).then(function(merchantSetup) {
        startMerchantForm(merchantSetup);
    }, function(error) {
        console.log(error);
    });

    let sdk;

    function startMerchantForm(merchantSetup) {
        let paymentInfo = {
            // amount: parseFloat(getUrlParam('monto')),
            amount: 50.00,
            discount: 0.0,
            taxAmount: 0.0,
            // description: getUrlParam('descripcion')
            description: 'Pruebas'
        };
        console.log("merchantSetup", merchantSetup);
        let setup = {
            lang: 'es',
            embedded: (getUrlParam('boton') == "false"),
            // type: 'lk',
            // code: 'LK-MAIMLMD1FKSQKCHU',
            container: 'container-form',
            onError: function(data) {
                console.error("errors", data);
            },
            onTxSuccess: function(data) {
                console.log("onTxSuccess", data);
                window.location.href = pfWallet.pfHostViews + `/pf/default-receipt/${data?.Oper}`;
            },
            onTxError: function(data) {
                console.error("when the onTxError, in other process", data);
            },
            onClose: function() {
                console.log("onClose called");
            }
        };
        sdk = merchantSetup.init(
            merchantSetup.dataMerchant,
            paymentInfo,
            setup
        );
    }
</script> --}}
