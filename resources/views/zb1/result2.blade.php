<?php 
	$resultHoeren = $viewHelper->calculateAndDisplayTestResult('h');
		$pyrocolor = 'blue-firework';

	if($resultHoeren > 69) {
		$badgeColor = 'bronce';
		$pyrocolor = 'blue-gold-firework';
	}
	if($resultHoeren > 79) {
		$badgeColor = 'silver';
		$pyrocolor = '';
	}		
	if($resultHoeren > 89) {
		$badgeColor = 'gold';
		$pyrocolor = 'gold-firework';
	}
	
	$resultbarColorHoeren = 'danger';
	if($resultHoeren > 60 )
		$resultbarColorHoeren = 'warning';
	if($resultHoeren > 85 )
		$resultbarColorHoeren = 'success';
	
	
?>
<form id="questionform" >
<input name="questionid" type="hidden" value="x" />
	{{ csrf_field() }}
</form>
   <nav data-equalizer>
          
        <div id="instructions" class="" data-equalizer-watch>
      
      
      
      
      
      <div class="row">
        <div class="large-12-columns">
          <?php if($resultHoeren > 59) { ?>
          <div class="pyro {{$pyrocolor}}">
            <div class="before"></div>
            <div class="after"></div>
          </div>
      	<?php }?>
      	<?php if($resultHoeren > 69) { ?>
      		<script>
				initParallax();
			</script>
            <div class="badge-container {{$badgeColor}}" id="badge">
            <svg class="badge layer" data-depth="0.50" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="212px" y="212px"
               viewBox="0 0 425 425" style="enable-background:new 0 0 425 425;" xml:space="preserve">
              <path class="outer layer" x="-212" y="-212" width="425" height="425" d="M374.8,349.7c10.2-12.1,8.9-31.6,15.8-45c7.2-13.9,23.8-24.1,27.7-38.9c3.9-15-5.8-32.1-5.4-47.5
                c0.4-15.5,11-31.9,8-47.1c-3-15.1-19-26.3-25.3-40.5c-6.2-14-3.8-33.4-13.2-45.9c-1.3-1.7-2.8-3.3-4.5-4.7c-10-8.5-25.6-12-36-20.7
                c-10.3-8.7-16.4-23.6-26.4-32c-1.7-1.4-3.4-2.6-5.4-3.6c-13.9-7.2-32.7-1.6-47.5-5.4c-15-3.9-28.7-17.8-44.1-18.3
                c-15.5-0.4-29.9,12.7-45.1,15.7c-15.1,3-33.5-3.7-47.7,2.6c-14,6.2-21.3,24.3-33.8,33.7c-12.1,9.1-31.6,11.1-41.8,23.1
                s-8.9,31.6-15.8,45c-7.2,13.9-23.8,24.1-27.7,38.9c-3.9,15,5.8,32.1,5.4,47.5c-0.4,15.5-11,31.9-8,47.1c3,15.1,19,26.3,25.3,40.5
                c6.2,14,3.8,33.4,13.2,45.9c1.3,1.7,2.8,3.3,4.5,4.7c10,8.5,25.6,12,36,20.7c10.3,8.7,16.4,23.6,26.4,32c1.7,1.4,3.4,2.6,5.4,3.6
                c13.9,7.2,32.7,1.6,47.5,5.4c15,3.9,28.7,17.8,44.1,18.3c15.5,0.4,29.9-12.7,45.1-15.7c15.1-3,33.5,3.7,47.7-2.6
                c14-6.2,21.3-24.3,33.8-33.7C345.1,363.7,364.6,361.8,374.8,349.7z M97.9,348C23,284.8,13.7,172.8,77,97.9S252.2,13.7,327.1,77
                s84.2,175.3,20.9,250.1S172.8,411.3,97.9,348z"/>
            </svg>
            <svg class="badge layer" data-depth=".45" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="212px" y="212px"
               viewBox="0 0 425 425" style="enable-background:new 0 0 425 425;" xml:space="preserve">
              <path class="badge layer" d="M425,212.5c0-15.8-13.6-29.9-17-44.6c-3.5-15.3,2.6-33.8-4-47.6c-6.8-14-25.1-20.8-34.7-32.8C359.6,75.4,357.1,56,345,46.4
              c-12-9.6-31.5-7.8-45.5-14.5c-13.8-6.6-24.5-23.1-39.7-26.5c-2.1-0.5-4.3-0.7-6.4-0.7c-13.1,0-27.3,7.4-40.8,7.4
              c-13.5,0-27.8-7.4-40.8-7.4c-2.2,0-4.3,0.2-6.4,0.7c-15.3,3.5-25.9,19.9-39.7,26.5c-14,6.8-33.5,4.9-45.5,14.5
              C67.9,56,65.4,75.4,55.7,87.5c-9.6,12-28,18.8-34.7,32.8c-6.6,13.8-0.5,32.3-4,47.6c-3.4,14.8-17,28.8-17,44.6s13.6,29.9,17,44.6
              c3.5,15.3-2.6,33.8,4,47.6c6.8,14,25.1,20.8,34.7,32.8c9.6,12.1,12.2,31.5,24.3,41.1c12,9.6,31.5,7.8,45.5,14.5
              c13.8,6.6,24.5,23.1,39.7,26.5c2.1,0.5,4.3,0.7,6.4,0.7c13.1,0,27.3-7.4,40.8-7.4c13.5,0,27.8,7.4,40.8,7.4c2.2,0,4.3-0.2,6.4-0.7
              c15.3-3.5,25.9-19.9,39.7-26.5c14-6.8,33.5-4.9,45.5-14.5c12.1-9.6,14.6-29.1,24.3-41.1c9.6-12,28-18.8,34.7-32.8
              c6.6-13.8,0.5-32.3,4-47.6C411.4,242.4,425,228.3,425,212.5z M212.5,390C114.5,390,35,310.5,35,212.5S114.5,35,212.5,35
              S390,114.5,390,212.5S310.5,390,212.5,390z"/>
            </svg>
            <svg class="badge layer" data-depth="0.35" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="212px" y="212px"
               viewBox="0 0 425 425" style="enable-background:new 0 0 425 425;" xml:space="preserve">
              <path class="inner layer" d="M329.5,95.5C298.3,64.2,256.7,47,212.5,47s-85.8,17.2-117,48.5C64.2,126.7,47,168.3,47,212.5s17.2,85.8,48.5,117
              c31.3,31.3,72.8,48.5,117,48.5s85.8-17.2,117-48.5c31.3-31.3,48.5-72.8,48.5-117S360.8,126.7,329.5,95.5z M368.9,208
              C368.9,208,368.9,208,368.9,208C368.9,208,368.9,208,368.9,208C368.9,208,368.9,208,368.9,208c0,0.1,0,0.1,0,0.1
              c0,1.9-1.5,3.5-3.4,3.5c0,0-0.1,0-0.1,0c-1.9,0-3.4-1.5-3.5-3.4l0-0.1c-0.1-1.9,1.5-3.5,3.4-3.6c0,0,0.1,0,0.1,0
              C367.3,204.6,368.8,206,368.9,208C368.9,207.9,368.9,208,368.9,208z M367.1,188C367.1,188,367.1,188.1,367.1,188
              C367.1,188.1,367.1,188.1,367.1,188c0,0.1,0,0.1,0,0.1c0.3,1.9-1,3.6-2.9,3.9c-0.2,0-0.4,0-0.5,0c-1.7,0-3.2-1.2-3.5-3l0-0.1
              c-0.3-1.9,1-3.7,2.9-4c0.2,0,0.4,0,0.5,0C365.3,185.1,366.8,186.3,367.1,188C367.1,188,367.1,188,367.1,188z M362.7,168.5
              C362.7,168.5,362.7,168.5,362.7,168.5c0,0.1,0,0.1,0,0.2c0.5,1.8-0.6,3.7-2.4,4.2c-0.3,0.1-0.7,0.1-1,0.1c-1.5,0-2.9-1-3.4-2.5
              l0-0.1c-0.5-1.9,0.5-3.8,2.4-4.3c0.3-0.1,0.7-0.1,1-0.1c1.5,0,2.8,0.9,3.3,2.4C362.7,168.4,362.7,168.4,362.7,168.5z M355.9,149.6
              C355.9,149.6,355.9,149.7,355.9,149.6C355.9,149.7,355.9,149.7,355.9,149.6c0,0.1,0,0.1,0.1,0.2c0.7,1.7-0.1,3.7-1.8,4.5
              c-0.5,0.2-0.9,0.3-1.4,0.3c-1.3,0-2.6-0.8-3.2-2.1l0,0c-0.8-1.8,0-3.8,1.8-4.6c0.5-0.2,0.9-0.3,1.4-0.3c1.3,0,2.5,0.7,3.1,2
              C355.8,149.5,355.8,149.6,355.9,149.6z M346.6,131.8C346.7,131.9,346.7,131.9,346.6,131.8c0,0.1,0,0.1,0.1,0.1
              c0.9,1.6,0.4,3.8-1.2,4.7c-0.6,0.3-1.2,0.5-1.8,0.5c-1.2,0-2.3-0.6-3-1.7l0,0c-1-1.7-0.5-3.8,1.2-4.8c0.6-0.3,1.2-0.5,1.8-0.5
              C344.8,130.1,346,130.7,346.6,131.8C346.6,131.8,346.6,131.8,346.6,131.8z M335.2,115.4C335.2,115.4,335.2,115.4,335.2,115.4
              C335.2,115.4,335.2,115.4,335.2,115.4C335.3,115.4,335.3,115.5,335.2,115.4c1.2,1.6,1,3.8-0.5,5c-0.6,0.5-1.4,0.8-2.2,0.8
              c-1,0-2.1-0.5-2.7-1.3l0,0c-1.2-1.5-0.9-3.7,0.6-4.9c0.6-0.5,1.4-0.8,2.2-0.8C333.5,114,334.5,114.5,335.2,115.4
              C335.2,115.3,335.2,115.4,335.2,115.4z M321.8,100.5C321.8,100.5,321.8,100.5,321.8,100.5c0.1,0.1,0.1,0.1,0.1,0.1
              c1.3,1.4,1.3,3.5,0,4.9c-0.7,0.7-1.6,1.1-2.5,1.1c-0.9,0-1.8-0.3-2.4-1l0,0c-1.4-1.4-1.4-3.6-0.1-4.9c0.7-0.7,1.6-1.1,2.5-1.1
              C320.2,99.5,321,99.8,321.8,100.5C321.7,100.4,321.8,100.5,321.8,100.5z M306.6,87.4L306.6,87.4C306.6,87.4,306.6,87.4,306.6,87.4
              C306.6,87.5,306.6,87.5,306.6,87.4c0.1,0.1,0.1,0.1,0.1,0.1c1.5,1.2,1.8,3.3,0.6,4.9c-0.7,0.9-1.7,1.4-2.8,1.4
              c-0.7,0-1.5-0.2-2.1-0.7l0,0c-1.5-1.2-1.9-3.4-0.7-4.9c0.7-0.9,1.7-1.4,2.8-1.4C305.2,86.7,305.9,87,306.6,87.4
              C306.6,87.4,306.6,87.4,306.6,87.4z M289.9,76.4C289.9,76.4,289.9,76.4,289.9,76.4C289.9,76.4,289.9,76.4,289.9,76.4
              C289.9,76.4,289.9,76.4,289.9,76.4C289.9,76.5,289.9,76.5,289.9,76.4c1.7,1,2.3,3.1,1.4,4.8c-0.6,1.1-1.8,1.8-3,1.8
              c-0.6,0-1.2-0.1-1.7-0.5l0,0c-1.7-1-2.3-3.1-1.3-4.8c0.6-1.1,1.8-1.8,3-1.8C288.7,76,289.2,76.1,289.9,76.4
              C289.8,76.4,289.8,76.4,289.9,76.4z M271.8,67.6C271.9,67.6,271.9,67.7,271.8,67.6c0.1,0,0.1,0.1,0.2,0.1c1.7,0.8,2.5,2.8,1.8,4.5
              c-0.6,1.4-1.9,2.2-3.2,2.2c-0.4,0-0.9-0.1-1.3-0.3l0,0c-1.8-0.7-2.6-2.8-1.9-4.6c0.6-1.4,1.9-2.2,3.2-2.2c0.4,0,0.8,0.1,1.2,0.2
              C271.7,67.6,271.8,67.6,271.8,67.6z M252.8,61.2C252.8,61.2,252.8,61.3,252.8,61.2C252.9,61.3,252.9,61.3,252.8,61.2
              c0.1,0,0.1,0,0.2,0.1c1.8,0.5,2.9,2.4,2.4,4.2c-0.4,1.6-1.8,2.6-3.4,2.6c-0.3,0-0.6,0-0.9-0.1l-0.1,0c-1.9-0.5-3-2.4-2.5-4.3
              c0.4-1.6,1.8-2.6,3.4-2.6c0.2,0,0.5,0,0.8,0.1C252.7,61.2,252.8,61.2,252.8,61.2z M233.2,57.4C233.2,57.4,233.2,57.4,233.2,57.4
              c0.1,0,0.1,0,0.2,0c1.9,0.3,3.2,2,2.9,3.9c-0.2,1.8-1.7,3-3.5,3c-0.2,0-0.3,0-0.5,0l-0.1,0c-1.9-0.3-3.3-2-3-3.9
              c0.2-1.8,1.7-3,3.5-3c0.1,0,0.2,0,0.3,0C233.1,57.3,233.1,57.3,233.2,57.4z M212.4,56C212.5,56,212.5,56,212.4,56
              C212.5,56,212.5,56,212.4,56C212.5,56,212.5,56,212.4,56c0.2,0,0.4,0,0.6,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0
              c0,0,0.1,0,0.1,0c1.9,0.1,3.4,1.6,3.4,3.5c0,1.9-1.6,3.5-3.5,3.5c0,0,0,0,0,0l-0.1,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0h-0.1
              c0,0,0,0,0,0c-1.9,0-3.5-1.6-3.5-3.5C208.9,57.6,210.5,56,212.4,56C212.4,56,212.4,56,212.4,56z M192.4,57.3
              C192.5,57.3,192.5,57.3,192.4,57.3C192.5,57.3,192.5,57.3,192.4,57.3c0.2,0,0.4,0,0.5,0c1.7,0,3.2,1.3,3.5,3.1
              c0.2,1.9-1.1,3.7-3,3.9l-0.1,0c-0.2,0-0.3,0-0.4,0c-1.7,0-3.2-1.3-3.5-3.1C189.2,59.3,190.5,57.5,192.4,57.3
              C192.4,57.3,192.4,57.3,192.4,57.3z M172.8,61.1C172.8,61.1,172.8,61.1,172.8,61.1C172.8,61.1,172.8,61.1,172.8,61.1
              c0.1,0,0.1,0,0.1,0c0.3-0.1,0.5-0.1,0.8-0.1c1.6,0,3,1,3.4,2.6c0.5,1.9-0.6,3.8-2.5,4.3l-0.1,0c-0.3,0.1-0.6,0.1-0.9,0.1
              c-1.6,0-3-1-3.4-2.6C169.8,63.5,170.9,61.6,172.8,61.1C172.7,61.1,172.7,61.1,172.8,61.1z M153.7,67.4
              C153.8,67.4,153.8,67.4,153.7,67.4C153.8,67.4,153.8,67.4,153.7,67.4c0.1,0,0.1,0,0.2-0.1c0.4-0.1,0.8-0.2,1.2-0.2
              c1.4,0,2.7,0.8,3.2,2.2c0.7,1.8-0.1,3.8-1.9,4.6l0,0c-0.4,0.2-0.9,0.3-1.3,0.3c-1.4,0-2.7-0.8-3.2-2.2c-0.7-1.8,0.1-3.7,1.8-4.5
              C153.7,67.4,153.7,67.4,153.7,67.4z M135.7,76.1C135.7,76.1,135.7,76.1,135.7,76.1C135.7,76.1,135.7,76.1,135.7,76.1
              C135.7,76.1,135.7,76.1,135.7,76.1c0.1-0.1,0.1-0.1,0.2-0.1c0.5-0.3,1-0.4,1.6-0.4c1.2,0,2.4,0.6,3.1,1.8c0.9,1.7,0.4,3.8-1.3,4.8
              l0,0c-0.5,0.3-1.1,0.5-1.7,0.5c-1.2,0-2.4-0.6-3.1-1.8C133.4,79.2,134,77.1,135.7,76.1C135.6,76.1,135.7,76.1,135.7,76.1z
               M118.9,87.1C118.9,87.1,118.9,87.1,118.9,87.1C118.9,87,118.9,87,118.9,87.1C119,87,119,87,118.9,87.1c0.7-0.5,1.4-0.7,2.1-0.7
              c1.1,0,2.1,0.5,2.8,1.4c1.2,1.5,0.8,3.7-0.7,4.9l0,0c-0.6,0.5-1.4,0.7-2.1,0.7c-1.1,0-2.1-0.5-2.8-1.4
              C117,90.4,117.4,88.2,118.9,87.1C118.9,87.1,118.9,87.1,118.9,87.1z M103.7,100.1C103.7,100,103.7,100,103.7,100.1
              c0.1-0.1,0.1-0.1,0.1-0.1c0.7-0.6,1.5-0.9,2.4-0.9c0.9,0,1.8,0.4,2.5,1.1c1.3,1.4,1.3,3.6-0.1,4.9l0,0c-0.7,0.7-1.6,1-2.4,1
              c-0.9,0-1.8-0.4-2.5-1.1C102.3,103.6,102.3,101.5,103.7,100.1C103.6,100.1,103.6,100.1,103.7,100.1z M90.2,114.9
              C90.2,114.9,90.2,114.9,90.2,114.9c0.1-0.1,0.1-0.1,0.1-0.1c0.7-0.8,1.7-1.2,2.7-1.2c0.8,0,1.5,0.3,2.2,0.8c1.5,1.2,1.8,3.4,0.5,4.9
              l0,0c-0.7,0.9-1.7,1.3-2.7,1.3c-0.8,0-1.5-0.3-2.2-0.8C89.2,118.6,89,116.5,90.2,114.9C90.1,114.9,90.1,114.9,90.2,114.9z
               M78.7,131.3C78.7,131.3,78.7,131.3,78.7,131.3C78.7,131.3,78.7,131.3,78.7,131.3L78.7,131.3C78.7,131.3,78.7,131.3,78.7,131.3
              c0.7-1.1,1.8-1.7,3-1.7c0.6,0,1.2,0.2,1.8,0.5c1.7,1,2.2,3.2,1.2,4.8l0,0c-0.7,1.1-1.8,1.7-3,1.7c-0.6,0-1.2-0.2-1.8-0.5
              C78.2,135.1,77.7,133,78.7,131.3C78.7,131.3,78.7,131.3,78.7,131.3z M69.4,149.1C69.4,149,69.4,149,69.4,149.1
              c0-0.1,0.1-0.1,0.1-0.2c0.6-1.2,1.8-2,3.1-2c0.5,0,1,0.1,1.4,0.3c1.8,0.8,2.6,2.9,1.8,4.6l0,0c-0.6,1.3-1.9,2.1-3.2,2.1
              c-0.5,0-1-0.1-1.4-0.3C69.4,152.9,68.6,150.9,69.4,149.1C69.4,149.1,69.4,149.1,69.4,149.1z M62.5,167.9
              C62.5,167.9,62.5,167.8,62.5,167.9c0-0.1,0.1-0.2,0.1-0.2c0.5-1.4,1.8-2.4,3.3-2.4c0.3,0,0.7,0,1,0.1c1.9,0.6,2.9,2.5,2.4,4.4l0,0.1
              c-0.5,1.5-1.8,2.5-3.4,2.5c-0.3,0-0.7,0-1-0.1c-1.8-0.5-2.9-2.4-2.4-4.2C62.4,168,62.4,167.9,62.5,167.9z M58,187.4
              C58,187.4,58,187.4,58,187.4C58,187.4,58,187.4,58,187.4C58,187.4,58,187.4,58,187.4C58,187.4,58,187.4,58,187.4c0-0.1,0-0.1,0-0.2
              c0.3-1.7,1.8-2.8,3.4-2.8c0.2,0,0.4,0,0.6,0c1.9,0.3,3.2,2.1,2.9,4l0,0.1c-0.3,1.7-1.8,2.9-3.5,2.9c-0.2,0-0.4,0-0.6,0
              c-1.9-0.3-3.1-2-2.9-3.9C58,187.5,58,187.4,58,187.4z M56.1,207.3C56.1,207.3,56.1,207.3,56.1,207.3c0-0.1,0-0.1,0-0.1
              c0.1-1.8,1.6-3.3,3.5-3.3c0,0,0.1,0,0.1,0c1.9,0.1,3.4,1.7,3.4,3.6l0,0.1c-0.1,1.9-1.6,3.4-3.5,3.4c0,0-0.1,0-0.1,0
              c-1.9-0.1-3.4-1.6-3.4-3.5C56.1,207.4,56.1,207.4,56.1,207.3C56.1,207.4,56.1,207.3,56.1,207.3z M56.7,227.4
              C56.7,227.4,56.7,227.4,56.7,227.4C56.7,227.3,56.7,227.3,56.7,227.4c0-0.1,0-0.1,0-0.2c-0.1-1.9,1.3-3.5,3.2-3.7c0.1,0,0.2,0,0.3,0
              c1.8,0,3.3,1.4,3.5,3.2l0,0.1c0.2,1.9-1.2,3.6-3.2,3.8c-0.1,0-0.2,0-0.3,0C58.4,230.6,56.9,229.3,56.7,227.4
              C56.7,227.5,56.7,227.4,56.7,227.4z M59.9,247.2C59.9,247.2,59.9,247.2,59.9,247.2C59.9,247.2,59.8,247.1,59.9,247.2
              c0-0.1,0-0.1,0-0.1c-0.4-1.9,0.8-3.7,2.7-4.1c0.3-0.1,0.5-0.1,0.8-0.1c1.6,0,3,1.1,3.4,2.7l0,0.1c0.4,1.9-0.8,3.8-2.6,4.2
              c-0.3,0.1-0.5,0.1-0.8,0.1C61.7,249.9,60.3,248.8,59.9,247.2C59.9,247.2,59.9,247.2,59.9,247.2z M65.5,266.4
              C65.5,266.4,65.5,266.4,65.5,266.4C65.5,266.4,65.5,266.4,65.5,266.4C65.5,266.4,65.5,266.3,65.5,266.4c-0.7-1.9,0.2-3.9,2.1-4.6
              c0.4-0.1,0.8-0.2,1.2-0.2c1.4,0,2.8,0.9,3.3,2.3l0,0c0.7,1.8-0.3,3.8-2.1,4.5c-0.4,0.1-0.8,0.2-1.2,0.2
              C67.4,268.7,66.1,267.8,65.5,266.4C65.5,266.4,65.5,266.4,65.5,266.4z M73.6,284.7C73.6,284.7,73.6,284.7,73.6,284.7
              c0-0.1,0-0.1-0.1-0.1c-0.8-1.7-0.2-3.8,1.5-4.6c0.5-0.3,1.1-0.4,1.6-0.4c1.3,0,2.5,0.7,3.1,1.9l0,0c0.9,1.7,0.2,3.8-1.5,4.7
              c-0.5,0.3-1.1,0.4-1.6,0.4c-1.2,0-2.4-0.6-3-1.8C73.7,284.8,73.7,284.8,73.6,284.7z M84,301.9C84,301.9,84,301.9,84,301.9
              C84,301.8,84,301.8,84,301.9c-0.1-0.1-0.1-0.1-0.1-0.1c-1-1.6-0.6-3.7,0.9-4.8c0.6-0.4,1.3-0.6,2-0.6c1.1,0,2.2,0.5,2.9,1.5l0,0
              c1.1,1.6,0.7,3.8-0.9,4.9c-0.6,0.4-1.3,0.6-2,0.6C85.8,303.4,84.8,302.9,84,301.9C84.1,301.9,84,301.9,84,301.9z M96.5,317.6
              C96.5,317.5,96.5,317.5,96.5,317.6C96.5,317.5,96.4,317.5,96.5,317.6c-1.3-1.5-1.2-3.7,0.2-5c0.7-0.6,1.5-0.9,2.3-0.9
              c1,0,1.9,0.4,2.6,1.2l0,0c1.3,1.4,1.2,3.6-0.2,4.9c-0.7,0.6-1.5,0.9-2.3,0.9C98.1,318.7,97.2,318.3,96.5,317.6
              C96.5,317.6,96.5,317.6,96.5,317.6z M110.9,331.5C110.9,331.5,110.8,331.5,110.9,331.5c-0.1-0.1-0.1-0.1-0.1-0.1
              c-1.4-1.3-1.6-3.4-0.3-4.9c0.7-0.8,1.7-1.2,2.7-1.2c0.8,0,1.6,0.3,2.3,0.8l0,0c1.5,1.3,1.6,3.5,0.4,4.9c-0.7,0.8-1.7,1.2-2.7,1.2
              C112.4,332.4,111.6,332.1,110.9,331.5C110.9,331.6,110.9,331.5,110.9,331.5z M126.9,343.5C126.9,343.5,126.9,343.5,126.9,343.5
              C126.9,343.5,126.9,343.5,126.9,343.5c-0.1-0.1-0.1-0.1-0.1-0.1c-1.5-1.1-2-3.2-0.9-4.8c0.7-1,1.8-1.6,2.9-1.6
              c0.7,0,1.3,0.2,1.9,0.6l0,0c1.6,1.1,2.1,3.2,1,4.8c-0.7,1-1.8,1.6-2.9,1.6c-0.6,0-1.2-0.2-1.8-0.5C127,343.6,127,343.6,126.9,343.5z
               M144.4,353.4C144.3,353.4,144.3,353.4,144.4,353.4c-0.1,0-0.1,0-0.1-0.1c-1.7-0.9-2.4-2.9-1.6-4.6c0.6-1.2,1.9-2,3.2-2
              c0.5,0,1,0.1,1.5,0.4l0,0c1.7,0.8,2.5,2.9,1.6,4.7c-0.6,1.2-1.9,2-3.2,2C145.4,353.8,144.9,353.7,144.4,353.4
              C144.4,353.4,144.4,353.4,144.4,353.4z M162.9,361C162.9,361,162.9,361,162.9,361c-0.1,0-0.1,0-0.1,0c-1.8-0.6-2.8-2.6-2.2-4.4
              c0.5-1.5,1.9-2.4,3.3-2.4c0.4,0,0.7,0.1,1.1,0.2l0,0c1.8,0.6,2.8,2.6,2.2,4.4c-0.5,1.5-1.9,2.4-3.3,2.4
              C163.7,361.2,163.3,361.1,162.9,361C163,361,162.9,361,162.9,361z M182.3,366.1C182.3,366.1,182.3,366.1,182.3,366.1
              C182.2,366.1,182.2,366.1,182.3,366.1c-0.1,0-0.1,0-0.2,0c-1.8-0.4-3-2.2-2.7-4.1c0.3-1.7,1.8-2.8,3.4-2.8c0.2,0,0.4,0,0.7,0.1
              l0.1,0c1.9,0.4,3.1,2.2,2.8,4.1c-0.3,1.7-1.8,2.8-3.4,2.8c-0.2,0-0.4,0-0.6-0.1C182.4,366.1,182.3,366.1,182.3,366.1z M202.4,368.7
              c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c-1.9-0.2-3.3-1.8-3.1-3.7c0.1-1.9,1.7-3.3,3.5-3.3
              c0.1,0,0.2,0,0.2,0l0.1,0c1.9,0.1,3.4,1.8,3.3,3.7C205.8,367.2,204.2,368.7,202.4,368.7C202.4,368.7,202.4,368.7,202.4,368.7z
               M222.2,368.7C222.2,368.7,222.2,368.7,222.2,368.7C222.2,368.7,222.1,368.7,222.2,368.7c-0.1,0-0.2,0-0.3,0c0,0,0,0,0,0
              c-1.8,0-3.3-1.4-3.5-3.3c-0.1-1.9,1.4-3.6,3.3-3.7l0.1,0c0.1,0,0.1,0,0.2,0c1.8,0,3.4,1.4,3.5,3.3c0.1,1.9-1.3,3.5-3.2,3.7
              C222.3,368.7,222.3,368.7,222.2,368.7z M242.1,366.2C242.1,366.2,242,366.2,242.1,366.2c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4,0-0.5,0
              c-1.6,0-3.1-1.2-3.4-2.8c-0.4-1.9,0.9-3.7,2.8-4.1l0.1,0c0.2,0,0.4-0.1,0.7-0.1c1.6,0,3.1,1.2,3.4,2.8c0.4,1.9-0.8,3.6-2.7,4.1
              C242.2,366.2,242.1,366.2,242.1,366.2z M261.5,361.2C261.5,361.2,261.5,361.2,261.5,361.2c-0.1,0-0.2,0-0.2,0.1
              c-0.3,0.1-0.6,0.1-1,0.1c-1.5,0-2.8-0.9-3.3-2.4c-0.6-1.8,0.4-3.8,2.2-4.4l0,0c0.4-0.1,0.7-0.2,1.1-0.2c1.5,0,2.8,0.9,3.3,2.4
              C264.3,358.6,263.4,360.5,261.5,361.2C261.6,361.1,261.5,361.2,261.5,361.2z M280.1,353.7C280.1,353.7,280.1,353.7,280.1,353.7
              C280.1,353.7,280.1,353.7,280.1,353.7C280,353.7,280,353.7,280.1,353.7C280,353.7,280,353.7,280.1,353.7c-0.6,0.3-1.1,0.4-1.6,0.4
              c-1.3,0-2.6-0.7-3.2-2c-0.8-1.7-0.1-3.8,1.6-4.7l0,0c0.5-0.2,1-0.3,1.5-0.3c1.3,0,2.6,0.7,3.2,2
              C282.6,350.8,281.8,352.8,280.1,353.7C280.1,353.7,280.1,353.7,280.1,353.7z M297.6,343.9C297.6,343.9,297.6,343.9,297.6,343.9
              C297.5,343.9,297.5,343.9,297.6,343.9C297.5,343.9,297.5,343.9,297.6,343.9C297.5,343.9,297.5,343.9,297.6,343.9
              c-0.1,0-0.1,0.1-0.1,0.1c-0.6,0.3-1.2,0.5-1.8,0.5c-1.1,0-2.3-0.6-2.9-1.6c-1.1-1.6-0.6-3.8,1-4.8l0,0c0.6-0.4,1.2-0.6,1.9-0.6
              c1.1,0,2.3,0.6,2.9,1.6C299.6,340.6,299.2,342.8,297.6,343.9C297.6,343.8,297.6,343.9,297.6,343.9z M313.6,331.9
              C313.6,331.9,313.6,331.9,313.6,331.9C313.6,331.9,313.6,332,313.6,331.9C313.6,332,313.6,332,313.6,331.9c-0.1,0.1-0.1,0.1-0.1,0.1
              c-0.6,0.5-1.4,0.8-2.2,0.8c-1,0-2-0.4-2.7-1.2c-1.2-1.5-1.1-3.7,0.4-4.9l0,0c0.7-0.6,1.5-0.8,2.3-0.8c1,0,2,0.4,2.7,1.2
              C315.3,328.4,315.1,330.6,313.6,331.9C313.7,331.9,313.7,331.9,313.6,331.9z M328.1,318C328.1,318,328.1,318,328.1,318
              C328.1,318,328.1,318,328.1,318C328,318,328,318.1,328.1,318C328,318.1,328,318.1,328.1,318c-0.8,0.8-1.7,1.2-2.6,1.2
              c-0.8,0-1.7-0.3-2.4-0.9c-1.4-1.3-1.5-3.5-0.2-4.9l0,0c0.7-0.8,1.6-1.1,2.6-1.1c0.8,0,1.7,0.3,2.4,0.9
              C329.3,314.4,329.4,316.6,328.1,318C328.1,318,328.1,318,328.1,318z M340.6,302.4C340.6,302.4,340.6,302.4,340.6,302.4
              C340.6,302.4,340.6,302.4,340.6,302.4C340.6,302.5,340.6,302.5,340.6,302.4c-0.8,1-1.8,1.5-2.9,1.5c-0.7,0-1.4-0.2-2-0.6
              c-1.6-1.1-2-3.3-0.8-4.9l0,0c0.7-1,1.8-1.5,2.9-1.5c0.7,0,1.4,0.2,2,0.6C341.3,298.6,341.7,300.7,340.6,302.4
              C340.7,302.3,340.6,302.4,340.6,302.4z M351.1,285.3C351.1,285.3,351.1,285.3,351.1,285.3c-0.1,0.1-0.1,0.1-0.1,0.2
              c-0.6,1.1-1.8,1.7-3,1.7c-0.5,0-1.1-0.1-1.6-0.4c-1.7-0.9-2.4-3-1.5-4.7l0,0c0.6-1.2,1.8-1.9,3.1-1.9c0.5,0,1.1,0.1,1.6,0.4
              c1.7,0.9,2.3,2.9,1.5,4.6C351.1,285.2,351.1,285.3,351.1,285.3z M359.3,267C359.2,267,359.2,267,359.3,267c0,0.1-0.1,0.1-0.1,0.2
              c-0.6,1.3-1.8,2.2-3.2,2.2c-0.4,0-0.8-0.1-1.2-0.2c-1.8-0.7-2.7-2.7-2.1-4.5l0,0c0.5-1.4,1.9-2.3,3.3-2.3c0.4,0,0.8,0.1,1.2,0.2
              C359,263.2,359.9,265.1,359.3,267C359.3,266.9,359.3,267,359.3,267z M365,247.8C365,247.8,365,247.8,365,247.8
              C365,247.8,365,247.8,365,247.8C365,247.9,365,247.9,365,247.8c-0.4,1.7-1.8,2.8-3.4,2.8c-0.3,0-0.5,0-0.8-0.1
              c-1.9-0.4-3.1-2.3-2.6-4.2l0-0.1c0.4-1.6,1.8-2.7,3.4-2.7c0.3,0,0.5,0,0.8,0.1C364.3,244,365.4,245.9,365,247.8
              C365,247.8,365,247.8,365,247.8z M368.2,228C368.2,228,368.2,228.1,368.2,228C368.2,228.1,368.2,228.1,368.2,228
              c-0.2,1.9-1.7,3.2-3.5,3.2c-0.1,0-0.2,0-0.3,0c-1.9-0.2-3.3-1.9-3.1-3.8l0-0.1c0.2-1.8,1.7-3.2,3.5-3.2c0.1,0,0.2,0,0.3,0
              C367,224.4,368.4,226.1,368.2,228C368.2,228,368.2,228,368.2,228C368.2,228,368.2,228,368.2,228z"/>
            </svg>
            <div class="txt-container layer" data-depth="0.25">
              <div class="title">Herzliche Gratulation!</div>
              <div class="percentage-display">{{ $resultHoeren }}</div>
            </div>
            
          </div>
          <?php } ?>
        </div>
      </div>
      <p>
      <h5 class="text-center">Auswertung Hören</h5>
      		<?php if($resultHoeren < 60) { ?>
      			<p>Sie haben  <b>{{ $resultHoeren }}</b> von 100 Punkten erreicht.<br/>
					Mit dieser Leistung würden Sie die ZB1-Prüfung leider nicht bestehen. <br/>
					Üben Sie weiter und versuchen Sie es dann noch einmal.
      			</p><br/>
      		<?php } else if($resultHoeren<70){ ?>
      			<p>Sie haben  <b>{{ $resultHoeren }}</b> von 100 Punkten erreicht.<br/>
					Mit dieser Leistung würden Sie die ZB1-Prüfung noch bestehen.
      			</p><br/>
      		<?php } else if($resultHoeren<80){ ?>
      			<p>Sie haben  <b>{{ $resultHoeren }}</b> von 100 Punkten erreicht.<br/>
					Mit dieser Leistung liegen Sie im Mittelfeld.
      			</p><br/>
      		<?php } else if($resultHoeren<90){ ?>
      		<b>Bravo!</b>
      			<p>Sie haben  <b>{{ $resultHoeren }}</b> von 100 Punkten erreicht.<br/>
					Das ist eine gute Leistung.
      			</p><br/>
      		<?php } else if($resultHoeren<100){ ?>
      		<b>Gratulation!</b>
      			<p>Sie haben  <b>{{ $resultHoeren }}</b> von 100 Punkten erreicht.<br/>
					Das ist eine sehr gute Leistung.
      			</p><br/>
      		<?php } else { ?>
      			<b>Herzlichen Glückwunsch!</b><br/>
				Sie haben 100 von 100 Punkten erreicht.<br/>
			Das ist eine ausgezeichnete Leistung.<br/>

      		<?php } ?>
      		
      </p>
      <h5 class="text-center">Auswertung</h5>
      <div class="row medium-up-1">
        <div class="column column block">
          <span class="label">Hören</span>
          <div class="progress" role="progressbar" tabindex="0" aria-valuenow="50" aria-valuemin="0" aria-valuetext="50 percent" aria-valuemax="100">
            <div class="progress-meter {{$resultbarColorHoeren}}" style="width: {{ $resultHoeren }}%"></div>
          </div>
        </div>
        
      </div>
      
      
        </div>
        <a  class="nav-button prev disabled" data-equalizer-watch>
          <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a  onClick="loadQuestion('zb1',12);$('.title-cnt').html('<h4><b>Zertifikat B1</b> Modellsatz Schreiben</h4>');" class="nav-button next" data-equalizer-watch>
          <i class="fa fa-angle-right fa-2x"></i>
        </a>
      </nav>
      
      
      