<?php
$string = do_shortcode('[urlparam param="alx777-get-user-dna"]');
$start = "🪪";
$end = "☎️";
$start_pos = strpos($string, $start)+7;
$end_pos = strpos($string, $end)-9;
$cli_info = urlencode(substr($string, $start_pos, $end_pos - $start_pos + strlen($end)));
$callus_style = "
    position: fixed;
    font-size: 16px;
    line-height: 17px;
    z-index: 99999;
    --call-us-main-accent-color: #4E8EB8;
    --call-us-main-background-color: white;
    --call-us-plate-background-color: #4E8EB8;
    --call-us-plate-font-color: white;
    --call-us-main-font-color: #202C33;
    --call-us-agent-bubble-color: #FFFFEC;
    right: 0px;
    bottom: -5px;
  "
?>

<call-us
  phonesystem-url="https://callcenter.eusaude.com.vc"
  party="LiveChat380404"
  enable-poweredby="false"
  style="<?php echo $callus_style; ?>"
  id="mychat"
  minimized="false"
  animation-style="noanimation"
  minimized-style="bubbleright"
  allow-call="true"
  allow-video="true"
  allow-soundnotifications="true"
  enable-mute="true"
  enable-onmobile="true"
  offline-enabled="true"
  enable="true"
  ignore-queueownership="true"
  authentication="none"
  operator-name="Vet de plantão"
  show-operator-actual-name="true"
  aknowledge-received="true"
  gdpr-enabled="false"
  message-userinfo-format="both"
  message-dateformat="none"
  start-chat-button-text="INICIAR"
  invite-message="Bem vindo(a). Para chamar um de nossos agentes, digite abaixo o motivo de seu atendimento e aperte a tecla ENTER."
  lang="pt"
  button-icon-type="default"
  authentication-message="Informe seu nome e e-mail"
  first-response-message="Você será atendido em instantes. ;-)"
  ending-message="Obrigado(a), sua sessão foi encerrada. Fique a vontade para nos chamar novamente :-)!"
  greeting-visibility="both"
  greeting-offline-visibility="none"
  greeting-message="!! Digite abaixo o motivo de seu atendimento !!"
  chat-delay="0"
  enable-direct-call="false"
  enable-ga="false"
></call-us>
<script defer src="https://eusaudecomvc.azurewebsites.net/wp-content/plugins/esd_callus_aviv/esd_callus-aviv-v1.js" id="tcx-callus-js" charset="utf-8">
</script>