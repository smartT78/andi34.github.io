<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../include/head.html') ?>
    <title>Custom Rom Development by Android-Andi @ XDA</title>
    
<script>
function show(sectionId) {
	if (document.getElementById(sectionId)) {
		document.getElementById(sectionId+'-show').style.display = 'none';
		document.getElementById(sectionId+'-hide').style.display = 'inline';
		document.getElementById(sectionId).style.display = 'block';
	}
}

function hide(sectionId) {
	if (document.getElementById(sectionId)) {
		document.getElementById(sectionId+'-show').style.display = 'inline';
		document.getElementById(sectionId+'-hide').style.display = 'none';
		document.getElementById(sectionId).style.display = 'none';
	}
}
</script>

  </head>
  <body id="page-top" class="single">
    <?php include('../include/nav.html') ?>
    <div class="container">
      
      <ul class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../changelogs.php">Changelogs for Devs</a></li>
        <li class="active">Android 4.4.4 R2.0.1 Security</li>
      </ul>

      <div class="jumbotron">
<div class="row">
	<div class="col-md-12">
<p>This only includes security-updates which can be added on top of the Android 4.4.4 R2.0.1 source from the Android Open Source Project.
The raw log was generated using a modified version of <a href="https://groups.google.com/d/msg/android-building/0DtsHawjs4k/And8o3Dni_UJ">this script</a> written by <a href="https://plus.google.com/112218872649456413744/posts">JBQ</a> and improved by <a href="https://plus.google.com/+AlSutton/posts">Al Sutton</a>.</p>

<p><b>Please do not copy this without attribution to this site and JBQ for the original script.</b></p>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="changes">		
<p><h2><a href="#" id="android_art-show" class="showLink" onclick="show('android_art');return false;">+</a><a href="#" id="android_art-hide" class="hideLink" onclick="hide('android_art');return false;">-</a>&nbsp;<a name="android_art" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_art">android_art</a></h2>
<div id="android_art"><a href="https://github.com/android-security/android_art/commit/479fe13">479fe13</a> :  Finish fixing Zygote descriptor leakage problem<br />
</div></p>

<p><h2><a href="#" id="android_bionic-show" class="showLink" onclick="show('android_bionic');return false;">+</a><a href="#" id="android_bionic-hide" class="hideLink" onclick="hide('android_bionic');return false;">-</a>&nbsp;<a name="android_bionic" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_bionic">android_bionic</a></h2>
<div id="android_bionic"><a href="https://github.com/android-security/android_bionic/commit/410a6d5">410a6d5</a> :  Fix overflow testing in sbrk.<br />
<a href="https://github.com/android-security/android_bionic/commit/b457cb7">b457cb7</a> :  Fix brk/sbrk error checking.<br />
</div></p>

<p><h2><a href="#" id="android_bootable_recovery-show" class="showLink" onclick="show('android_bootable_recovery');return false;">+</a><a href="#" id="android_bootable_recovery-hide" class="hideLink" onclick="hide('android_bootable_recovery');return false;">-</a>&nbsp;<a name="android_bootable_recovery" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_bootable_recovery">android_bootable_recovery</a></h2>
<div id="android_bootable_recovery"><a href="https://github.com/android-security/android_bootable_recovery/commit/87bc27b">87bc27b</a> :  Track usage of Vector / SortedVector from libutils DO NOT MERGE<br />
</div></p>

<p><h2><a href="#" id="android_build-show" class="showLink" onclick="show('android_build');return false;">+</a><a href="#" id="android_build-hide" class="hideLink" onclick="hide('android_build');return false;">-</a>&nbsp;<a name="android_build" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_build">android_build</a></h2>
<div id="android_build"><a href="https://github.com/android-security/android_build/commit/5a56ae8">5a56ae8</a> :  Update security patch string to 2016-08-01 - For Partners only<br />
<a href="https://github.com/android-security/android_build/commit/9dcdc2e">9dcdc2e</a> :  Updating security string to 2016-07-01<br />
<a href="https://github.com/android-security/android_build/commit/7bade4d">7bade4d</a> :  Update security patch string to 2016-06-01<br />
<a href="https://github.com/android-security/android_build/commit/da03ce5">da03ce5</a> :  Allow building with javac 1.7<br />
<a href="https://github.com/android-security/android_build/commit/43f238c">43f238c</a> :  Some changes added to compile and run with Java 6 and Java 7.<br />
<a href="https://github.com/android-security/android_build/commit/e746334">e746334</a> :  build: Allow building with OpenJDK<br />
<a href="https://github.com/android-security/android_build/commit/c2af00f">c2af00f</a> :  Support building with GNU make 4.0<br />
<a href="https://github.com/android-security/android_build/commit/b246e79">b246e79</a> :  Merge Conflict--Update Security String to 2016-05-01 in preparation for May 2016 Security OTA<br />
<a href="https://github.com/android-security/android_build/commit/c61a5c2">c61a5c2</a> :  Updating security string patch to 2016-04-01<br />
<a href="https://github.com/android-security/android_build/commit/1b11d53">1b11d53</a> :  Updating security patch string to 2016-03-01<br />
<a href="https://github.com/android-security/android_build/commit/d7b4806">d7b4806</a> :  DO NOT MERGE - Update security string to 2016-02-01<br />
<a href="https://github.com/android-security/android_build/commit/69b783f">69b783f</a> :  Update Security String to 2016-01-01 - DO NOT MERGE<br />
<a href="https://github.com/android-security/android_build/commit/17c9809">17c9809</a> :  Update security string to 2015-12-01 - DO NOT MERGE<br />
<a href="https://github.com/android-security/android_build/commit/a232f4d">a232f4d</a> :  DO NOT MERGE - Backport of ag/748221 - Security Patch Level in Settings CL#2/3<br />
</div></p>

<p><h2><a href="#" id="android_dalvik-show" class="showLink" onclick="show('android_dalvik');return false;">+</a><a href="#" id="android_dalvik-hide" class="hideLink" onclick="hide('android_dalvik');return false;">-</a>&nbsp;<a name="android_dalvik" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_dalvik">android_dalvik</a></h2>
<div id="android_dalvik"><a href="https://github.com/android-security/android_dalvik/commit/98e6ecd">98e6ecd</a> :  Fix potential buffer overrun.<br />
<a href="https://github.com/android-security/android_dalvik/commit/29a0b87">29a0b87</a> :  Remove old fork-and-specialize API<br />
<a href="https://github.com/android-security/android_dalvik/commit/7004b0c">7004b0c</a> :  Finish fixing Zygote descriptor leakage problem<br />
</div></p>

<p><h2><a href="#" id="android_external_aac-show" class="showLink" onclick="show('android_external_aac');return false;">+</a><a href="#" id="android_external_aac-hide" class="hideLink" onclick="hide('android_external_aac');return false;">-</a>&nbsp;<a name="android_external_aac" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_aac">android_external_aac</a></h2>
<div id="android_external_aac"><a href="https://github.com/android-security/android_external_aac/commit/5157f83">5157f83</a> :  Fix aacDecoder_drcExtractAndMap()<br />
<a href="https://github.com/android-security/android_external_aac/commit/df09a70">df09a70</a> :  Fix stack corruption happening in aacDecoder_drcExtractAndMap()<br />
</div></p>

<p><h2><a href="#" id="android_external_bluetooth_bluedroid-show" class="showLink" onclick="show('android_external_bluetooth_bluedroid');return false;">+</a><a href="#" id="android_external_bluetooth_bluedroid-hide" class="hideLink" onclick="hide('android_external_bluetooth_bluedroid');return false;">-</a>&nbsp;<a name="android_external_bluetooth_bluedroid" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_bluetooth_bluedroid">android_external_bluetooth_bluedroid</a></h2>
<div id="android_external_bluetooth_bluedroid"><a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/905a778">905a778</a> :  DO NOT MERGE Fix potential DoS caused by delivering signal to BT process<br />
<a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/055cf78">055cf78</a> :  DO NOT MERGE btif: check overflow on create_pbuf size<br />
<a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/0043c95">0043c95</a> :  Change pairing_cb to assume temporary pairing by default<br />
<a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/260bf63">260bf63</a> :  DO NOT MERGE Check size of pin before replying<br />
<a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/bb50d03">bb50d03</a> :  DO NOT MERGE Remove Porsche car-kit pairing workaround<br />
<a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/242b1e0">242b1e0</a> :  Use 0000 as pin key for PORCHE_PAIRING_CONFLICT issue<br />
<a href="https://github.com/android-security/android_external_bluetooth_bluedroid/commit/a61bd41">a61bd41</a> :  DO NOT MERGE - Add proper checks for PAN &amp; BNEP in BD stack<br />
</div></p>

<p><h2><a href="#" id="android_external_bouncycastle-show" class="showLink" onclick="show('android_external_bouncycastle');return false;">+</a><a href="#" id="android_external_bouncycastle-hide" class="hideLink" onclick="hide('android_external_bouncycastle');return false;">-</a>&nbsp;<a name="android_external_bouncycastle" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_bouncycastle">android_external_bouncycastle</a></h2>
<div id="android_external_bouncycastle"><a href="https://github.com/android-security/android_external_bouncycastle/commit/19dac08">19dac08</a> :  DO NOT MERGE bouncycastle: limit input length as specified by the NIST spec<br />
</div></p>

<p><h2><a href="#" id="android_external_chromium_org-show" class="showLink" onclick="show('android_external_chromium_org');return false;">+</a><a href="#" id="android_external_chromium_org-hide" class="hideLink" onclick="hide('android_external_chromium_org');return false;">-</a>&nbsp;<a name="android_external_chromium_org" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_chromium_org">android_external_chromium_org</a></h2>
<div id="android_external_chromium_org"><a href="https://github.com/android-security/android_external_chromium_org/commit/797ceca">797ceca</a> :  Disable SPDY pooling<br />
<a href="https://github.com/android-security/android_external_chromium_org/commit/af8709f">af8709f</a> :  Add client-side support for TLS_FALLBACK_SCSV<br />
<a href="https://github.com/android-security/android_external_chromium_org/commit/5dab2e1">5dab2e1</a> :  Disable SPDY pooling<br />
</div></p>

<p><h2><a href="#" id="android_external_chromium_org_third_party_openssl-show" class="showLink" onclick="show('android_external_chromium_org_third_party_openssl');return false;">+</a><a href="#" id="android_external_chromium_org_third_party_openssl-hide" class="hideLink" onclick="hide('android_external_chromium_org_third_party_openssl');return false;">-</a>&nbsp;<a name="android_external_chromium_org_third_party_openssl" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_chromium_org_third_party_openssl">android_external_chromium_org_third_party_openssl</a></h2>
<div id="android_external_chromium_org_third_party_openssl"><a href="https://github.com/android-security/android_external_chromium_org_third_party_openssl/commit/407ed3e">407ed3e</a> :  Add client-side support for TLS_FALLBACK_SCSV.<br />
<a href="https://github.com/android-security/android_external_chromium_org_third_party_openssl/commit/9b83937">9b83937</a> :  Only allow ephemeral RSA keys in export ciphersuites.<br />
</div></p>

<p><h2><a href="#" id="android_external_dhcpcd-show" class="showLink" onclick="show('android_external_dhcpcd');return false;">+</a><a href="#" id="android_external_dhcpcd-hide" class="hideLink" onclick="hide('android_external_dhcpcd');return false;">-</a>&nbsp;<a name="android_external_dhcpcd" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_dhcpcd">android_external_dhcpcd</a></h2>
<div id="android_external_dhcpcd"><a href="https://github.com/android-security/android_external_dhcpcd/commit/2a4c627">2a4c627</a> :  Improve length checks in DHCP Options parsing of dhcpcd.<br />
<a href="https://github.com/android-security/android_external_dhcpcd/commit/6f91ba0">6f91ba0</a> :  Really disable IPv6 RA processing in dhcpcd.<br />
<a href="https://github.com/android-security/android_external_dhcpcd/commit/61ea854">61ea854</a> :  Fix DoS vulnerability in DHO_OPTIONSOVERLOADED.<br />
</div></p>

<p><h2><a href="#" id="android_external_flac-show" class="showLink" onclick="show('android_external_flac');return false;">+</a><a href="#" id="android_external_flac-hide" class="hideLink" onclick="hide('android_external_flac');return false;">-</a>&nbsp;<a name="android_external_flac" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_flac">android_external_flac</a></h2>
<div id="android_external_flac"><a href="https://github.com/android-security/android_external_flac/commit/ad10b47">ad10b47</a> :  Avoid free-before-initialize vulnerability in heap<br />
</div></p>

<p><h2><a href="#" id="android_external_jhead-show" class="showLink" onclick="show('android_external_jhead');return false;">+</a><a href="#" id="android_external_jhead-hide" class="hideLink" onclick="hide('android_external_jhead');return false;">-</a>&nbsp;<a name="android_external_jhead" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_jhead">android_external_jhead</a></h2>
<div id="android_external_jhead"><a href="https://github.com/android-security/android_external_jhead/commit/96777bd">96777bd</a> :  Fix possible out of bounds access<br />
</div></p>

<p><h2><a href="#" id="android_external_libvpx-show" class="showLink" onclick="show('android_external_libvpx');return false;">+</a><a href="#" id="android_external_libvpx-hide" class="hideLink" onclick="hide('android_external_libvpx');return false;">-</a>&nbsp;<a name="android_external_libvpx" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_libvpx">android_external_libvpx</a></h2>
<div id="android_external_libvpx"><a href="https://github.com/android-security/android_external_libvpx/commit/9837fbc">9837fbc</a> :  DO NOT MERGE - external/libvpx/libwebm: Update snapshot<br />
<a href="https://github.com/android-security/android_external_libvpx/commit/22abafc">22abafc</a> :  DO NOT MERGE - libvpx: Pull from upstream<br />
</div></p>

<p><h2><a href="#" id="android_external_okhttp-show" class="showLink" onclick="show('android_external_okhttp');return false;">+</a><a href="#" id="android_external_okhttp-hide" class="hideLink" onclick="hide('android_external_okhttp');return false;">-</a>&nbsp;<a name="android_external_okhttp" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_okhttp">android_external_okhttp</a></h2>
<div id="android_external_okhttp"><a href="https://github.com/android-security/android_external_okhttp/commit/eae3944">eae3944</a> :  Fix a bug in OkHostnameVerifier wildcard handling.<br />
<a href="https://github.com/android-security/android_external_okhttp/commit/b6b72da">b6b72da</a> :  SCSV support<br />
</div></p>

<p><h2><a href="#" id="android_external_openssl-show" class="showLink" onclick="show('android_external_openssl');return false;">+</a><a href="#" id="android_external_openssl-hide" class="hideLink" onclick="hide('android_external_openssl');return false;">-</a>&nbsp;<a name="android_external_openssl" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_openssl">android_external_openssl</a></h2>
<div id="android_external_openssl"><a href="https://github.com/android-security/android_external_openssl/commit/a02d734">a02d734</a> :  Fix memory issues in BIO_*printf functions<br />
<a href="https://github.com/android-security/android_external_openssl/commit/47c113e">47c113e</a> :  Check that we have enough padding characters.<br />
<a href="https://github.com/android-security/android_external_openssl/commit/18b642b">18b642b</a> :  Constant-time utilities<br />
<a href="https://github.com/android-security/android_external_openssl/commit/86fbed9">86fbed9</a> :  Fix encoding bug in i2c_ASN1_INTEGER<br />
<a href="https://github.com/android-security/android_external_openssl/commit/7b976ba">7b976ba</a> :  Fix double-free in DSA code (CVE-2016-0705)<br />
<a href="https://github.com/android-security/android_external_openssl/commit/ad41f66">ad41f66</a> :  Add support for TLS_FALLBACK_SCSV<br />
<a href="https://github.com/android-security/android_external_openssl/commit/6b408ee">6b408ee</a> :  Fix for CVE-2014-0195<br />
<a href="https://github.com/android-security/android_external_openssl/commit/21fd5a0">21fd5a0</a> :  Fix CVE-2014-0221<br />
<a href="https://github.com/android-security/android_external_openssl/commit/7e12360">7e12360</a> :  Fix CVE-2014-3470<br />
<a href="https://github.com/android-security/android_external_openssl/commit/c785241">c785241</a> :  Only allow ephemeral RSA keys in export ciphersuites.<br />
</div></p>

<p><h2><a href="#" id="android_external_skia-show" class="showLink" onclick="show('android_external_skia');return false;">+</a><a href="#" id="android_external_skia-hide" class="hideLink" onclick="hide('android_external_skia');return false;">-</a>&nbsp;<a name="android_external_skia" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_skia">android_external_skia</a></h2>
<div id="android_external_skia"><a href="https://github.com/android-security/android_external_skia/commit/4a0fbab">4a0fbab</a> :  Use min/max to pin value between 0 and 255.<br />
<a href="https://github.com/android-security/android_external_skia/commit/d58a710">d58a710</a> :  Update SK_CRASH to default to abort().<br />
<a href="https://github.com/android-security/android_external_skia/commit/d50f2b8">d50f2b8</a> :  Fix removal of SI8_opaque_D32_nofilter_DX_arm<br />
<a href="https://github.com/android-security/android_external_skia/commit/02ce051">02ce051</a> :  Remove SI8_opaque_D32_nofilter_DX_arm DO NOT MERGE<br />
<a href="https://github.com/android-security/android_external_skia/commit/1168aa4">1168aa4</a> :  Prevent malformed ICO files from recursively decoding<br />
<a href="https://github.com/android-security/android_external_skia/commit/968454f">968454f</a> :  Fix overflow when comparing two ints by promoting the sum to 64-bits.<br />
<a href="https://github.com/android-security/android_external_skia/commit/3e9f006">3e9f006</a> :  Handle bad ICO data better.<br />
<a href="https://github.com/android-security/android_external_skia/commit/ae64a20">ae64a20</a> :  SkScaledBitmapSampler: fix memory overwritten<br />
</div></p>

<p><h2><a href="#" id="android_external_sonivox-show" class="showLink" onclick="show('android_external_sonivox');return false;">+</a><a href="#" id="android_external_sonivox-hide" class="hideLink" onclick="hide('android_external_sonivox');return false;">-</a>&nbsp;<a name="android_external_sonivox" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_sonivox">android_external_sonivox</a></h2>
<div id="android_external_sonivox"><a href="https://github.com/android-security/android_external_sonivox/commit/8f43a5c">8f43a5c</a> :  Sonivox: add SafetyNet log.<br />
<a href="https://github.com/android-security/android_external_sonivox/commit/b026654">b026654</a> :  Sonivox: sanity check numSamples.<br />
<a href="https://github.com/android-security/android_external_sonivox/commit/161a3de">161a3de</a> :  Check segments and libs<br />
<a href="https://github.com/android-security/android_external_sonivox/commit/2f4af97">2f4af97</a> :  Sonivox: check loopStart/loopLength against one specific wave, not whole wave pool.<br />
<a href="https://github.com/android-security/android_external_sonivox/commit/8407cb0">8407cb0</a> :  Sonivox: fix overflow in Parse_data in eas_mdls.c<br />
<a href="https://github.com/android-security/android_external_sonivox/commit/6d9c04a">6d9c04a</a> :  Sonivox: make sure waveIndex is valid in Parse_rgn() in eas_mdls.c.<br />
<a href="https://github.com/android-security/android_external_sonivox/commit/ac4e1ec">ac4e1ec</a> :  DLS parser: fix wave pool size check.<br />
</div></p>

<p><h2><a href="#" id="android_external_sqlite-show" class="showLink" onclick="show('android_external_sqlite');return false;">+</a><a href="#" id="android_external_sqlite-hide" class="hideLink" onclick="hide('android_external_sqlite');return false;">-</a>&nbsp;<a name="android_external_sqlite" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_sqlite">android_external_sqlite</a></h2>
<div id="android_external_sqlite"><a href="https://github.com/android-security/android_external_sqlite/commit/c10cb2b">c10cb2b</a> :  sqlite: upgrade to patched SQLite 3.7.11 - DO NOT MERGE<br />
<a href="https://github.com/android-security/android_external_sqlite/commit/65efff0">65efff0</a> :  Fix world-readable permissions due to sqlite race condition<br />
</div></p>

<p><h2><a href="#" id="android_external_tremolo-show" class="showLink" onclick="show('android_external_tremolo');return false;">+</a><a href="#" id="android_external_tremolo-hide" class="hideLink" onclick="hide('android_external_tremolo');return false;">-</a>&nbsp;<a name="android_external_tremolo" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_tremolo">android_external_tremolo</a></h2>
<div id="android_external_tremolo"><a href="https://github.com/android-security/android_external_tremolo/commit/8b021d2">8b021d2</a> :  Check partword is in range for # of partitions<br />
<a href="https://github.com/android-security/android_external_tremolo/commit/7dedfd2">7dedfd2</a> :  libvorbisidec: sanity check index of marker.<br />
<a href="https://github.com/android-security/android_external_tremolo/commit/b7a83c4">b7a83c4</a> :  Fix vorbis decoder crash due to out of bounds memory access<br />
<a href="https://github.com/android-security/android_external_tremolo/commit/f22c84d">f22c84d</a> :  Fix allocation failure crash<br />
<a href="https://github.com/android-security/android_external_tremolo/commit/c1be890">c1be890</a> :  Add sanity checks to fix crash<br />
</div></p>

<p><h2><a href="#" id="android_external_wpa_supplicant_8-show" class="showLink" onclick="show('android_external_wpa_supplicant_8');return false;">+</a><a href="#" id="android_external_wpa_supplicant_8-hide" class="hideLink" onclick="hide('android_external_wpa_supplicant_8');return false;">-</a>&nbsp;<a name="android_external_wpa_supplicant_8" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_external_wpa_supplicant_8">android_external_wpa_supplicant_8</a></h2>
<div id="android_external_wpa_supplicant_8"><a href="https://github.com/android-security/android_external_wpa_supplicant_8/commit/0ae423e">0ae423e</a> :  Guard against return value already being null<br />
<a href="https://github.com/android-security/android_external_wpa_supplicant_8/commit/3fd5d95">3fd5d95</a> :  Remove newlines from config output<br />
<a href="https://github.com/android-security/android_external_wpa_supplicant_8/commit/633c8ed">633c8ed</a> :  P2P: Validate SSID element length before copying it<br />
<a href="https://github.com/android-security/android_external_wpa_supplicant_8/commit/2534946">2534946</a> :  hostapd_cli: Use os_exec() for action script execution<br />
<a href="https://github.com/android-security/android_external_wpa_supplicant_8/commit/e722e25">e722e25</a> :  wpa_cli: Use os_exec() for action script execution<br />
<a href="https://github.com/android-security/android_external_wpa_supplicant_8/commit/3be0547">3be0547</a> :  Add os_exec() helper to run external programs<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_av-show" class="showLink" onclick="show('android_frameworks_av');return false;">+</a><a href="#" id="android_frameworks_av-hide" class="hideLink" onclick="hide('android_frameworks_av');return false;">-</a>&nbsp;<a name="android_frameworks_av" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_frameworks_av">android_frameworks_av</a></h2>
<div id="android_frameworks_av"><a href="https://github.com/android-security/android_frameworks_av/commit/1d28916">1d28916</a> :  DO NOT MERGE: Camera: Adjust pointers to ANW buffers to avoid infoleak<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c50e647">c50e647</a> :  DO NOT MERGE omx: check buffer port before using<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/65a5abb">65a5abb</a> :  Check effect command reply size in AudioFlinger<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/9b75782">9b75782</a> :  DO NOT MERGE SoftAAC2: fix crash on all-zero adts buffer<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/299015c">299015c</a> :  Fix potential overflow<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/6a3270e">6a3270e</a> :  Don't use sp&lt;&gt;&amp;<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/2c87d9b">2c87d9b</a> :  DO NOT MERGE MPEG4Extractor: ensure kKeyTrackID exists before creating an MPEG4Source as track.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/411bf4c">411bf4c</a> :  DO NOT MERGE Check malloc result to avoid NPD<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/69d8a6a">69d8a6a</a> :  DO NOT MERGE limit mediaserver memory<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/2a0367a">2a0367a</a> :  h264bsdActivateParamSets: Prevent multiplication overflow.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/0d9071b">0d9071b</a> :  Fix security vulnerability in libstagefright<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/3303db0">3303db0</a> :  Clear unused pointer field when sending across binder<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/832d1c1">832d1c1</a> :  DO NOT MERGE codecs: check OMX buffer size before use in vorbisdec<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/29a056f">29a056f</a> :  DO NOT MERGE codecs: check OMX buffer size before use in (h263|h264)dec<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/23927df">23927df</a> :  SampleTable.cpp: Fixed a regression caused by a fix for bug 28076789.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/1983979">1983979</a> :  SampleTable.cpp: Prevent corrupted stts block from causing excessive memory allocation.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c6b9d96">c6b9d96</a> :  DO NOT MERGE Don't reject "thumbnail mode" setConfig<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/352b76d">352b76d</a> :  DO NOT MERGE Verify OMX buffer sizes prior to access<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c8ccb66">c8ccb66</a> :  AudioSource: initialize variables<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/32cf7c2">32cf7c2</a> :  Check mp3 output buffer size<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/b6237f7">b6237f7</a> :  DO NOT MERGE codecs: check OMX buffer size before use in (gsm|g711)dec<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/66501a5">66501a5</a> :  h264dec: check for overflows when calculating allocation size.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/e666550">e666550</a> :  Fix AMR decoder<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/22720cf">22720cf</a> :  SoftAMR: check input buffer size to avoid overflow.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c11c8d0">c11c8d0</a> :  SoftAMR: check output buffer size to avoid overflow.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/7be9cb7">7be9cb7</a> :  DO NOT MERGE codecs: check OMX buffer size before use in VP8 encoder.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/253ae23">253ae23</a> :  NuPlayerStreamListener: NULL and bounds check before memcpy<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c0c1993">c0c1993</a> :  Camera3Device: Validate template ID<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/217b421">217b421</a> :  DO NOT MERGE Add VPX output buffer size check<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/3309d24">3309d24</a> :  stagefright: Remove assert for corrupt clips for AMRNB<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/56b2745">56b2745</a> :  Also fix out of bounds access for normal read<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/1ab00ce">1ab00ce</a> :  Get service by value instead of reference<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/dd30f8d">dd30f8d</a> :  Clear allocation to avoid info leak<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c4cbc85">c4cbc85</a> :  DO NOT MERGE - Remove deprecated image defines<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c92771e">c92771e</a> :  Camera: Disallow dumping clients directly<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/adef7a9">adef7a9</a> :  fix possible overflow in effect wrappers.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c0f6f46">c0f6f46</a> :  Fix out-of-bounds write<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c70b5d0">c70b5d0</a> :  DO NOT MERGE - libstagefright: check requested memory size before allocation for SoftMPEG4Encoder and SoftVPXEncoder.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/0474810">0474810</a> :  DO NOT MERGE SoundPool: add lock for findSample access from SoundPoolThread<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/f6172fa">f6172fa</a> :  DO NOT MERGE - AudioFlinger: Clear record buffers when starting RecordThread<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/e174797">e174797</a> :  DO NOT MERGE - OMX: allow only secure codec to remotely call allocateBuffer.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/cb2c814">cb2c814</a> :  ID3: check possible integer overflow for extendedHeaderSize and paddingSize.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c714ba4">c714ba4</a> :  Check NAL size before use<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/673fa58">673fa58</a> :  MPEG4Extractor: ensure buffer size is not less than 8 for LastCommentData.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c9d549f">c9d549f</a> :  Don't crash when there's no conceal frame<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/1673e05">1673e05</a> :  DO NOT MERGE stagefright: fix AMessage::FromParcel<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/170139e">170139e</a> :  DO NOT MERGE Fix vulnerability in mediaserver<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/0702359">0702359</a> :  DO NOT MERGE NuCachedSource2: fix possible erroneous early free<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/63f26e4">63f26e4</a> :  Limit allocations to avoid out-of-memory<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/b820d9c">b820d9c</a> :  Fix heap data leak vulnerability<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/64ca46c">64ca46c</a> :  Fix for security vulnerability in media server DO NOT MERGE<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/741632c">741632c</a> :  DO NOT MERGE - IAudioFlinger: always initialize variables to ensure no info leak when writing them to Parcel.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/95539e9">95539e9</a> :  Make IEffect command more robust (second try)<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/a164f44">a164f44</a> :  libmedia: clear reply data for IEffect command<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/bdabc96">bdabc96</a> :  Fix timedtext parsing<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/575336a">575336a</a> :  DO NOT MERGE - libstagefright: sanity check size before dereferencing pointer in Utils.cpp<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/b22bb70">b22bb70</a> :  DO NOT MERGE fix build<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/6a2c96d">6a2c96d</a> :  DO NOT MERGE Avoid size_t overflow in base64 decoding once again<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/cfad707">cfad707</a> :  Ogg: avoid size_t overflow in base64 decoding<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/a832561">a832561</a> :  DO NOT MERGE - IAudioFlinger: clear config before reading it from parcel.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/86ba4be">86ba4be</a> :  Zero out return values in media binder calls<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/4ead418">4ead418</a> :  IMediaPlayer.cpp: make sure structures are initialized to 0<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/acb73db">acb73db</a> :  stagefright: check IMemory::pointer() before using the allocation<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/0269d9c">0269d9c</a> :  Fail more gracefully on allocation failure<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/2365806">2365806</a> :  Fix compile failure after rI431aa2b7d30a942350ab6d105451c6b77e2f99d4<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/2376346">2376346</a> :  libstagefright: fix overflow in pvdec_api.cpp.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/49cd07d">49cd07d</a> :  libstagefright: check memory size for overflow before allocation.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/e8b6868">e8b6868</a> :  Fix for memory corruption in ID3::removeUnsynchronizationV2_4(). Bug: 23227354<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/570756d">570756d</a> :  Fix build break DO NOT MERGE<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/deb39a9">deb39a9</a> :  Fix crash on malformed id3<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/01c82e6">01c82e6</a> :  libstagefright: fix possible overflow in amrwbenc.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/1792dcc">1792dcc</a> :  DO NOT MERGE - audio flinger: fix fuzz test crash<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c0bccf3">c0bccf3</a> :  DO NOT MERGE Part of fix for libmedia OOB write anywhere<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/4302151">4302151</a> :  libstagefright: fix possible overflow in ID3.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/fe33f86">fe33f86</a> :  Prevent integer issues in ID3::Iterator::findFrame<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/5db1e75">5db1e75</a> :  SampleTable: fix integer overflow checks.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/59aed18">59aed18</a> :  Extra sanity checks on sample size and resolution<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/3b7cb64">3b7cb64</a> :  libstagefright: check overflow before memory allocation in OMXCodec.cpp<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/6032bae">6032bae</a> :  Sanity check padding/delay values for gapless playback<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/febb4c9">febb4c9</a> :  MatroskaExtractor: detect infinite loop when parsing NALs<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/36a8243">36a8243</a> :  DO NOT MERGE libstagefright: Fix crash in convertMetaDataToMessage<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c10f497">c10f497</a> :  Fix Ogg album art<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/3cef83d">3cef83d</a> :  Fix comparison sign warnings.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/7d90c96">7d90c96</a> :  libstagefright: fix overflow in MPEG4Source::parseSampleAuxiliaryInformationOffsets.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/53081ca">53081ca</a> :  MPEG4Extractor.cpp: Add check for size == SIZE_MAX<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/6b72ea9">6b72ea9</a> :  Check RTSP payload length<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/11e66d1">11e66d1</a> :  ABuffer: reset members when memory allocation fails.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/41eb89f">41eb89f</a> :  DO NOT MERGE - Fix software video decoder buffer size calculation<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/0bd52e8">0bd52e8</a> :  DO NOT MERGE - SoftwareRenderer: sanity check buffer size before copying data.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/0284ff4">0284ff4</a> :  Check vector size before accessing<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/1616cf0">1616cf0</a> :  SoftAVCEnc: check requested memory size before allocation.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/21f2645">21f2645</a> :  Check buffer size before using it<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c056476">c056476</a> :  MPEG4Source::fragmentedRead: check range before writing into buffers<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/b425784">b425784</a> :  do not dequeue from native window after we hit fatal error -- DO NOT MERGE<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/ebf71f0">ebf71f0</a> :  libstagefright: fix handling of mSampleTimeEntries and mNumSampleSizes in SampleTable.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/8ab3245">8ab3245</a> :  libstagefright: check remaining data size before parsing it.<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/fa16aa6">fa16aa6</a> :  Check integer overflow to prevent memory corruption<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/afcaff4">afcaff4</a> :  Fix several ineffective integer overflow checks<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/3e66cda">3e66cda</a> :  SampleTable: check integer overflow during table alloc<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/21f648f">21f648f</a> :  DO NOT MERGE - audio effects: fix heap overflow<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/1060675">1060675</a> :  MPEG4Extractor.cpp: handle chunk_size &gt; SIZE_MAX<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/fa46e35">fa46e35</a> :  DO NOT MERGE - IOMX: Add buffer range check to emptyBuffer<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/67c8578">67c8578</a> :  HDCP: buffer over flow check -- DO NOT MERGE<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/abe438b">abe438b</a> :  DO NOT MERGE: Add AUtils::isInRange, and use it to detect malformed MPEG4 nal sizes<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/32b89dd">32b89dd</a> :  Fix integer overflow when handling MPEG4 tx3g atom<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/a95f8ed">a95f8ed</a> :  Fix integer underflow in covr MPEG4 processing<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/00b3442">00b3442</a> :  Prevent integer overflow when processing covr MPEG4 atoms<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/c88d6b7">c88d6b7</a> :  Fix integer underflow in ESDS processing<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/3701ee4">3701ee4</a> :  Fix integer overflow during MP4 atom processing<br />
<a href="https://github.com/android-security/android_frameworks_av/commit/ff687ba">ff687ba</a> :  Guard against codecinfo overflow<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_base-show" class="showLink" onclick="show('android_frameworks_base');return false;">+</a><a href="#" id="android_frameworks_base-hide" class="hideLink" onclick="hide('android_frameworks_base');return false;">-</a>&nbsp;<a name="android_frameworks_base" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_frameworks_base">android_frameworks_base</a></h2>
<div id="android_frameworks_base"><a href="https://github.com/android-security/android_frameworks_base/commit/3e7694c">3e7694c</a> :  DO NOT MERGE: Don't trust callers to supply app info to bindBackupAgent()<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/ce65785">ce65785</a> :  Don't pass URL path and username/password to PAC scripts<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/55c1fe2">55c1fe2</a> :  DO NOT MERGE Fix intent filter priorities<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/f415bf5">f415bf5</a> :  Fix issue #16794553: Duplicate ArrayMap entries in Bundle...<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/f702e7c">f702e7c</a> :  Do not persist and restore the media button event receiver<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/f225754">f225754</a> :  Change permission guard on bindBackupAgent()<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/d1cf7a6">d1cf7a6</a> :  Prevent system uid component from running in an app process<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/5d4d8d2">5d4d8d2</a> :  Prevent insanely long passwords from crashing SystemUI<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/1eef089">1eef089</a> :  Finish fixing Zygote descriptor leakage problem<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/acb473a">acb473a</a> :  DO NOT MERGE Redact Account info from getCurrentSyncs<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/268ddae">268ddae</a> :  NPE fix for SyncStorageEngine read authority<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/41f642a">41f642a</a> :  Sync extras bundle comparison can throw NPE<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/7c16306">7c16306</a> :  Make Bitmap_createFromParcel check the color count. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/bf1c34e">bf1c34e</a> :  DO NOT MERGE - Backport of ag/748165 to klp-dev Security patch level in Settings<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/41d7f47">41d7f47</a> :  Allow debugging only for apps forked from zygote<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/04463e6">04463e6</a> :  Ensure that unparcelling Region only reads the expected number of bytes<br />
<a href="https://github.com/android-security/android_frameworks_base/commit/f0bc716">f0bc716</a> :  Check that the parcel contained the expected amount of region data.<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_native-show" class="showLink" onclick="show('android_frameworks_native');return false;">+</a><a href="#" id="android_frameworks_native-hide" class="hideLink" onclick="hide('android_frameworks_native');return false;">-</a>&nbsp;<a name="android_frameworks_native" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_frameworks_native">android_frameworks_native</a></h2>
<div id="android_frameworks_native"><a href="https://github.com/android-security/android_frameworks_native/commit/8135304">8135304</a> :  Correctly handle dup() failure in Parcel::readNativeHandle<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/d3a0834">d3a0834</a> :  Fix issue #27252896: Security Vulnerability -- weak binder<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/1ad5757">1ad5757</a> :  DO NOT MERGE BQ: fix some uninitialized variables<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/b016f87">b016f87</a> :  Merge conflict--DO NOT MERGE Add SN logging<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/072f129">072f129</a> :  Sanity check IMemory access versus underlying mmap<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/04ee44c">04ee44c</a> :  DO NOT MERGE BQ: Add permission check to BufferQueueConsumer::dump<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/371f043">371f043</a> :  IGraphicBufferProducer: fix QUEUE_BUFFER info leak<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/01fe256">01fe256</a> :  DO NOT MERGE: fix build try #2<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/891ddd2">891ddd2</a> :  DO NOT MERGE: fix build breakage<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/188769e">188769e</a> :  add number constraint for samples per MotionEvent<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/57de8c5">57de8c5</a> :  Disregard alleged binder entities beyond parcel bounds<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/229be7d">229be7d</a> :  Update maxNumber to be smaller.<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/69cb285">69cb285</a> :  Fix for corruption when numFds or numInts is too large.<br />
<a href="https://github.com/android-security/android_frameworks_native/commit/ed3f1ee">ed3f1ee</a> :  Initialize local variables to avoid data leak<br />
</div></p>

<p><h2><a href="#" id="android_frameworks_opt_telephony-show" class="showLink" onclick="show('android_frameworks_opt_telephony');return false;">+</a><a href="#" id="android_frameworks_opt_telephony-hide" class="hideLink" onclick="hide('android_frameworks_opt_telephony');return false;">-</a>&nbsp;<a name="android_frameworks_opt_telephony" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_frameworks_opt_telephony">android_frameworks_opt_telephony</a></h2>
<div id="android_frameworks_opt_telephony"><a href="https://github.com/android-security/android_frameworks_opt_telephony/commit/b1488c9">b1488c9</a> :  backport security fix: avoid set NITZ time to 2038<br />
<a href="https://github.com/android-security/android_frameworks_opt_telephony/commit/4770a87">4770a87</a> :  opt/telephony: Fix compile on JDK7<br />
<a href="https://github.com/android-security/android_frameworks_opt_telephony/commit/1eddbd9">1eddbd9</a> :  Externally-reported Moderate severity vulnerability in SMS<br />
</div></p>

<p><h2><a href="#" id="android_libcore-show" class="showLink" onclick="show('android_libcore');return false;">+</a><a href="#" id="android_libcore-hide" class="hideLink" onclick="hide('android_libcore');return false;">-</a>&nbsp;<a name="android_libcore" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_libcore">android_libcore</a></h2>
<div id="android_libcore"><a href="https://github.com/android-security/android_libcore/commit/30d2012">30d2012</a> :  Use SSL_session_reused to check when a session was reused<br />
<a href="https://github.com/android-security/android_libcore/commit/1f1ef09">1f1ef09</a> :  art: Fix building under JDK7<br />
<a href="https://github.com/android-security/android_libcore/commit/feacaf7">feacaf7</a> :  Fix compilation of Enum on JDK 7<br />
<a href="https://github.com/android-security/android_libcore/commit/c78565c">c78565c</a> :  Locale: Retain compatibility with 4.4 APIs<br />
<a href="https://github.com/android-security/android_libcore/commit/833e901">833e901</a> :  java7: Implement new Locale APIs.<br />
<a href="https://github.com/android-security/android_libcore/commit/1a65a30">1a65a30</a> :  Remove old fork-and-specialize API<br />
<a href="https://github.com/android-security/android_libcore/commit/90c7c5d">90c7c5d</a> :  DO NOT MERGE Prevent duplicate certificates in TrustedCertificateIndex<br />
<a href="https://github.com/android-security/android_libcore/commit/be492cb">be492cb</a> :  DO NOT MERGE Cache intermediate CA separately<br />
<a href="https://github.com/android-security/android_libcore/commit/de823c2">de823c2</a> :  Finish fixing Zygote descriptor leakage problem<br />
<a href="https://github.com/android-security/android_libcore/commit/026c6fb">026c6fb</a> :  Add API to check certificate chain signatures<br />
<a href="https://github.com/android-security/android_libcore/commit/032ee01">032ee01</a> :  OpenSSLX509Certificate: mark mContext as transient<br />
<a href="https://github.com/android-security/android_libcore/commit/894c826">894c826</a> :  Fix a bug in DefaultHostnameVerifier wildcard handling.<br />
<a href="https://github.com/android-security/android_libcore/commit/822236a">822236a</a> :  Add additional checks in ObjectInputStream<br />
<a href="https://github.com/android-security/android_libcore/commit/9562048">9562048</a> :  Add additional field checks for deserialization.<br />
<a href="https://github.com/android-security/android_libcore/commit/39c70da">39c70da</a> :  DO NOT MERGE: Add a way to get all values of an attribute of DN.<br />
<a href="https://github.com/android-security/android_libcore/commit/b99ad53">b99ad53</a> :  Add support for TLS_FALLBACK_SCSV<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_Bluetooth-show" class="showLink" onclick="show('android_packages_apps_Bluetooth');return false;">+</a><a href="#" id="android_packages_apps_Bluetooth-hide" class="hideLink" onclick="hide('android_packages_apps_Bluetooth');return false;">-</a>&nbsp;<a name="android_packages_apps_Bluetooth" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_Bluetooth">android_packages_apps_Bluetooth</a></h2>
<div id="android_packages_apps_Bluetooth"><a href="https://github.com/android-security/android_packages_apps_Bluetooth/commit/32190b5">32190b5</a> :  DO NOT MERGE Fix security vulnerabilities in permission of deleting MMS/SMS<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_CertInstaller-show" class="showLink" onclick="show('android_packages_apps_CertInstaller');return false;">+</a><a href="#" id="android_packages_apps_CertInstaller-hide" class="hideLink" onclick="hide('android_packages_apps_CertInstaller');return false;">-</a>&nbsp;<a name="android_packages_apps_CertInstaller" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_CertInstaller">android_packages_apps_CertInstaller</a></h2>
<div id="android_packages_apps_CertInstaller"><a href="https://github.com/android-security/android_packages_apps_CertInstaller/commit/a8fcb2b">a8fcb2b</a> :  Trust CA certificates added for the whole OS only<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_Gallery2-show" class="showLink" onclick="show('android_packages_apps_Gallery2');return false;">+</a><a href="#" id="android_packages_apps_Gallery2-hide" class="hideLink" onclick="hide('android_packages_apps_Gallery2');return false;">-</a>&nbsp;<a name="android_packages_apps_Gallery2" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_Gallery2">android_packages_apps_Gallery2</a></h2>
<div id="android_packages_apps_Gallery2"><a href="https://github.com/android-security/android_packages_apps_Gallery2/commit/ed8ff81">ed8ff81</a> :  util: Fix build of LinkNode.java.<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_Mms-show" class="showLink" onclick="show('android_packages_apps_Mms');return false;">+</a><a href="#" id="android_packages_apps_Mms-hide" class="hideLink" onclick="hide('android_packages_apps_Mms');return false;">-</a>&nbsp;<a name="android_packages_apps_Mms" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_Mms">android_packages_apps_Mms</a></h2>
<div id="android_packages_apps_Mms"><a href="https://github.com/android-security/android_packages_apps_Mms/commit/ea70340">ea70340</a> :  Fix a NPE when update message status<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_Nfc-show" class="showLink" onclick="show('android_packages_apps_Nfc');return false;">+</a><a href="#" id="android_packages_apps_Nfc-hide" class="hideLink" onclick="hide('android_packages_apps_Nfc');return false;">-</a>&nbsp;<a name="android_packages_apps_Nfc" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_Nfc">android_packages_apps_Nfc</a></h2>
<div id="android_packages_apps_Nfc"><a href="https://github.com/android-security/android_packages_apps_Nfc/commit/c71a5df">c71a5df</a> :  Verify setForegroundDispatch caller is in foreground. (DO NOT MERGE)<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_Settings-show" class="showLink" onclick="show('android_packages_apps_Settings');return false;">+</a><a href="#" id="android_packages_apps_Settings-hide" class="hideLink" onclick="hide('android_packages_apps_Settings');return false;">-</a>&nbsp;<a name="android_packages_apps_Settings" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_Settings">android_packages_apps_Settings</a></h2>
<div id="android_packages_apps_Settings"><a href="https://github.com/android-security/android_packages_apps_Settings/commit/7c97677">7c97677</a> :  SECURITY: Don't pass a usable Pending Intent to 3rd parties.<br />
<a href="https://github.com/android-security/android_packages_apps_Settings/commit/e022728">e022728</a> :  Add translations for Security Patch Level.<br />
<a href="https://github.com/android-security/android_packages_apps_Settings/commit/a2d7427">a2d7427</a> :  DO NOT MERGE - Backport of ag/748147 - Security Patch Level in Settings CL#3/3<br />
<a href="https://github.com/android-security/android_packages_apps_Settings/commit/169c0d5">169c0d5</a> :  Check for special char when renaming device for Wi-Fi direct.<br />
</div></p>

<p><h2><a href="#" id="android_packages_apps_UnifiedEmail-show" class="showLink" onclick="show('android_packages_apps_UnifiedEmail');return false;">+</a><a href="#" id="android_packages_apps_UnifiedEmail-hide" class="hideLink" onclick="hide('android_packages_apps_UnifiedEmail');return false;">-</a>&nbsp;<a name="android_packages_apps_UnifiedEmail" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_apps_UnifiedEmail">android_packages_apps_UnifiedEmail</a></h2>
<div id="android_packages_apps_UnifiedEmail"><a href="https://github.com/android-security/android_packages_apps_UnifiedEmail/commit/74bbf66">74bbf66</a> :  Disallow attachments from file:///data/<br />
</div></p>

<p><h2><a href="#" id="android_packages_services_Telephony-show" class="showLink" onclick="show('android_packages_services_Telephony');return false;">+</a><a href="#" id="android_packages_services_Telephony-hide" class="hideLink" onclick="hide('android_packages_services_Telephony');return false;">-</a>&nbsp;<a name="android_packages_services_Telephony" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_packages_services_Telephony">android_packages_services_Telephony</a></h2>
<div id="android_packages_services_Telephony"><a href="https://github.com/android-security/android_packages_services_Telephony/commit/37eaff6">37eaff6</a> :  DO NOT MERGE - Prevent "add-call" UI during setup wizard.<br />
</div></p>

<p><h2><a href="#" id="android_system_core-show" class="showLink" onclick="show('android_system_core');return false;">+</a><a href="#" id="android_system_core-hide" class="hideLink" onclick="hide('android_system_core');return false;">-</a>&nbsp;<a name="android_system_core" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_system_core">android_system_core</a></h2>
<div id="android_system_core"><a href="https://github.com/android-security/android_system_core/commit/876b218">876b218</a> :  Fix scanf %s in lsof.<br />
<a href="https://github.com/android-security/android_system_core/commit/35ae4ed">35ae4ed</a> :  Fix overflow in path building<br />
<a href="https://github.com/android-security/android_system_core/commit/a6504fd">a6504fd</a> :  Don't demangle symbol names. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_system_core/commit/1c7667c">1c7667c</a> :  Don't create tombstone directory. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_system_core/commit/e448b26">e448b26</a> :  debuggerd: use O_NOFOLLOW|O_CLOEXEC for tombstones. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_system_core/commit/7421a61">7421a61</a> :  ensure /data/tombstones exists on all Android device. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_system_core/commit/da777f2">da777f2</a> :  Add macro to call event logger for errors. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_system_core/commit/7146603">7146603</a> :  libutils: Fix integer overflows in VectorImpl. DO NOT MERGE<br />
<a href="https://github.com/android-security/android_system_core/commit/e5a4c59">e5a4c59</a> :  Fix compile failure after rIfe1dc0791040150132bea6884f1e6c8d31972d1b<br />
<a href="https://github.com/android-security/android_system_core/commit/9fec438">9fec438</a> :  libutils: fix overflow in String8::allocFromUTF8<br />
<a href="https://github.com/android-security/android_system_core/commit/62b0ab5">62b0ab5</a> :  libutils: fix overflow in SharedBuffer<br />
</div></p>

<p><h2><a href="#" id="android_system_security-show" class="showLink" onclick="show('android_system_security');return false;">+</a><a href="#" id="android_system_security-hide" class="hideLink" onclick="hide('android_system_security');return false;">-</a>&nbsp;<a name="android_system_security" class="nonLink">Project:</a> <a href="https://github.com/android-security/android_system_security">android_system_security</a></h2>
<div id="android_system_security"><a href="https://github.com/android-security/android_system_security/commit/2693710">2693710</a> :  Properly check for Blob max length<br />
<a href="https://github.com/android-security/android_system_security/commit/72eade5">72eade5</a> :  Fix unchecked length in Blob creation<br />
</div></p>
</div>
</div>
        <a href="../changelogs.php" class="btn btn-raised btn-primary"><i class="material-icons">arrow_back</i> Back to Changelogs</a>
</div>
</div>
</div>
   
    <?php include('../include/footer.html') ?>

  </body>
</html>