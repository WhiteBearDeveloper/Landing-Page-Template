<?
\Main\IncludeElements::addStyle('social-list');
?>
<div class="social-list <?=$block;?>__social-list">
	<?foreach ($list as $list_item => $link){?>
		<a href="<?=$link;?>" target="_blank" class="<?=$block;?>__social-item social-item" <?=$attributes[$list_item] ?? '';?>>
			<svg class="social-icon <?=$block;?>__social-icon <?=$block;?>__social-icon-<?=$list_item;?> <?=$block;?>__social-icon-<?=$theme;?> social-icon__<?=$theme;?> social-icon-<?=$list_item;?>">
				<use xlink:href="#<?=$list_item;?>-social"></use>
			</svg>
		</a>
	<?}?>
</div>
<div class="svg-sprite">
	<div class="svg-sprite">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<symbol viewBox="0 0 21 12" id="vk-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M20.889 10.837a1.64 1.64 0 0 0-.072-.137c-.364-.657-1.06-1.463-2.088-2.42l-.022-.022-.01-.01-.011-.012h-.011c-.467-.445-.762-.744-.886-.898-.226-.292-.277-.587-.153-.887.087-.226.415-.704.984-1.434.299-.387.535-.697.71-.93 1.261-1.68 1.808-2.753 1.64-3.22l-.065-.11c-.043-.065-.156-.126-.338-.18-.183-.055-.416-.064-.7-.028l-3.15.022a.408.408 0 0 0-.218.006l-.142.033-.055.027-.044.033a.486.486 0 0 0-.12.115.752.752 0 0 0-.109.191 17.894 17.894 0 0 1-1.17 2.464c-.27.453-.517.845-.744 1.178a5.663 5.663 0 0 1-.568.733 3.968 3.968 0 0 1-.416.378c-.124.095-.218.135-.284.12a8.001 8.001 0 0 1-.186-.043.728.728 0 0 1-.246-.269 1.203 1.203 0 0 1-.125-.427 4.716 4.716 0 0 1-.039-.443 9.28 9.28 0 0 1 .006-.526c.007-.226.01-.38.01-.46 0-.277.006-.579.017-.903l.027-.772c.008-.19.011-.391.011-.603 0-.211-.013-.377-.038-.498a1.706 1.706 0 0 0-.114-.35.59.59 0 0 0-.225-.263 1.262 1.262 0 0 0-.366-.148c-.386-.088-.878-.135-1.476-.142C8.747-.013 7.876.075 7.49.264a1.47 1.47 0 0 0-.416.329c-.13.16-.15.248-.054.263.437.065.747.222.929.47l.066.132c.05.095.102.263.153.504.05.24.084.507.098.799.036.533.036.99 0 1.369-.036.38-.07.675-.104.887a1.778 1.778 0 0 1-.147.515 2.25 2.25 0 0 1-.132.24.188.188 0 0 1-.054.055.818.818 0 0 1-.296.055c-.102 0-.226-.051-.371-.153a2.625 2.625 0 0 1-.454-.422 5.636 5.636 0 0 1-.53-.75 13.01 13.01 0 0 1-.613-1.139L5.39 3.1c-.109-.204-.258-.502-.448-.892s-.357-.769-.503-1.134a.722.722 0 0 0-.262-.35L4.122.691a.748.748 0 0 0-.175-.093 1.159 1.159 0 0 0-.251-.071L.7.549c-.306 0-.514.07-.623.208L.033.823A.355.355 0 0 0 0 .998c0 .08.022.179.066.295.437 1.03.913 2.023 1.426 2.98.514.955.96 1.726 1.34 2.31a27.08 27.08 0 0 0 1.159 1.653c.393.518.654.85.781.997.128.146.228.255.301.328l.274.263c.175.175.431.385.77.63.34.244.715.485 1.127.722.412.238.89.431 1.437.58.547.15 1.08.21 1.597.182h1.257c.255-.023.448-.103.58-.241l.043-.055a.727.727 0 0 0 .082-.203c.026-.09.038-.191.038-.3a3.614 3.614 0 0 1 .071-.85c.055-.251.117-.441.186-.569a1.4 1.4 0 0 1 .422-.482.713.713 0 0 1 .087-.038c.175-.058.38-.002.618.17.237.172.459.383.667.635.208.252.457.535.749.849.291.314.546.547.765.7l.219.132c.146.088.335.168.568.241.233.073.437.091.613.055l2.799-.044c.276 0 .492-.046.645-.137.153-.091.244-.192.273-.301a.85.85 0 0 0 .006-.373 1.376 1.376 0 0 0-.077-.29z"/>
			</symbol>
			<symbol viewBox="0 0 14 23" id="ok-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M5.803 16.234c-1.787-.187-3.398-.627-4.777-1.705-.171-.135-.348-.264-.504-.414-.604-.58-.664-1.244-.187-1.928.409-.586 1.095-.742 1.808-.406.138.065.27.147.396.234 2.57 1.766 6.101 1.815 8.681.08.256-.197.53-.356.846-.438.616-.158 1.19.068 1.52.607.378.615.373 1.216-.092 1.693-.714.733-1.572 1.262-2.525 1.632-.902.35-1.89.526-2.867.643.148.16.217.239.31.332 1.327 1.333 2.66 2.66 3.982 3.998.451.456.545 1.021.297 1.551-.271.58-.879.96-1.474.92-.377-.026-.672-.214-.933-.477-1.002-1.008-2.022-1.997-3.003-3.024-.286-.299-.423-.242-.675.017a200.861 200.861 0 0 1-3.061 3.074c-.463.456-1.013.538-1.55.278-.57-.277-.932-.859-.904-1.444.019-.395.213-.697.485-.968 1.313-1.312 2.623-2.627 3.933-3.94.087-.088.168-.18.294-.315z"/>
				<path
					d="M6.891 11.666c-3.187-.011-5.8-2.654-5.782-5.846C1.127 2.592 3.743-.01 6.96 0c3.226.009 5.814 2.647 5.798 5.908-.016 3.186-2.648 5.769-5.868 5.758zm2.897-5.838a2.841 2.841 0 0 0-2.85-2.849 2.845 2.845 0 0 0-2.857 2.883 2.841 2.841 0 0 0 2.872 2.826 2.835 2.835 0 0 0 2.835-2.86z"/>
			</symbol>
			<symbol viewBox="0 0 12 22" id="fb-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M11.34.005L8.52 0C5.349 0 3.3 2.102 3.3 5.356v2.47H.46a.444.444 0 0 0-.444.444v3.578c0 .245.2.443.444.443H3.3v9.029c0 .245.198.444.444.444h3.702a.444.444 0 0 0 .444-.444v-9.03h3.318a.444.444 0 0 0 .443-.443l.002-3.578a.444.444 0 0 0-.444-.444h-3.32V5.732c0-1.006.24-1.517 1.551-1.517h1.901a.444.444 0 0 0 .444-.444V.448a.444.444 0 0 0-.443-.443z"/>
			</symbol>
			<symbol viewBox="0 0 21 21" id="in-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M14.438 0H6.561A6.563 6.563 0 0 0 0 6.563v7.875A6.563 6.563 0 0 0 6.563 21h7.875A6.563 6.563 0 0 0 21 14.437V6.564A6.563 6.563 0 0 0 14.437 0zm4.593 14.438a4.599 4.599 0 0 1-4.593 4.593H6.561a4.599 4.599 0 0 1-4.593-4.593V6.561A4.599 4.599 0 0 1 6.562 1.97h7.875a4.599 4.599 0 0 1 4.594 4.593v7.875z"/>
				<path
					d="M10.5 5.25a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5zm0 8.531A3.286 3.286 0 0 1 7.219 10.5 3.285 3.285 0 0 1 10.5 7.219a3.285 3.285 0 0 1 3.281 3.281 3.286 3.286 0 0 1-3.281 3.281z"/>
				<circle cx="16.144" cy="4.856" r="1"/>
			</symbol>
			<symbol viewBox="0 0 22 16" id="yt-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M21.065 1.458C20.468.395 19.821.2 18.502.127 17.185.037 13.872 0 11.002 0 8.129 0 4.815.037 3.499.125 2.182.201 1.533.395.931 1.458.316 2.518 0 4.344 0 7.557v.013c0 3.201.316 5.041.93 6.09.603 1.062 1.25 1.254 2.567 1.344 1.317.077 4.63.122 7.506.122 2.87 0 6.182-.045 7.5-.121 1.319-.09 1.967-.282 2.563-1.343.62-1.05.934-2.89.934-6.09v-.011c0-3.216-.314-5.042-.935-6.102zM8.25 11.688v-8.25l6.875 4.124-6.875 4.125z"/>
			</symbol>
			<symbol viewBox="0 0 34 25" id="em-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M17 17l-4.206-3.682L.767 23.628a2.462 2.462 0 0 0 1.679.658h29.108c.649 0 1.237-.253 1.671-.658l-12.019-10.31L17 17z"/>
				<path
					d="M33.233.658A2.446 2.446 0 0 0 31.554 0H2.446C1.797 0 1.209.253.772.663L17 14.571 33.233.658zM0 2.132V22.31l11.737-9.974zm22.263 10.203L34 22.309V2.125z"/>
			</symbol>
			<symbol viewBox="0 0 31 30" id="ms-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M15.5 0C7.216 0 .5 6.218.5 13.888c0 4.37 2.18 8.269 5.59 10.815V30l5.107-2.803c1.363.377 2.807.581 4.303.581 8.284 0 15-6.217 15-13.888C30.5 6.22 23.784 0 15.5 0zm1.49 18.703l-3.819-4.074-7.453 4.074 8.2-8.704 3.913 4.075 7.359-4.075-8.2 8.704z"/>
			</symbol>
			<symbol viewBox="0 0 36 36" id="sk-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M34.497 20.606c.135-.85.205-1.72.205-2.607 0-9.225-7.477-16.702-16.703-16.702-.885 0-1.757.073-2.606.206A10.04 10.04 0 0 0 10.093 0C4.52 0 0 4.518 0 10.093c0 1.945.551 3.76 1.503 5.3A17.007 17.007 0 0 0 1.298 18c0 9.225 7.478 16.7 16.702 16.7.886 0 1.758-.068 2.607-.202a10.06 10.06 0 0 0 5.3 1.502C31.482 36 36 31.48 36 25.906c0-1.946-.55-3.76-1.503-5.3zm-8.567 4.99c-.707 1.017-1.745 1.811-3.101 2.383-1.36.573-2.965.858-4.82.858-2.224 0-4.064-.389-5.517-1.174a7.149 7.149 0 0 1-2.512-2.258c-.645-.942-.972-1.864-.972-2.764 0-.53.202-.992.596-1.368.398-.379.91-.568 1.515-.568.496 0 .921.149 1.268.444.344.296.632.726.868 1.293.283.657.59 1.206.917 1.644.325.433.782.795 1.374 1.077.586.284 1.365.426 2.34.426 1.335 0 2.413-.289 3.239-.858.83-.575 1.228-1.274 1.228-2.12 0-.673-.215-1.208-.656-1.625-.444-.423-1.019-.745-1.731-.97-.715-.226-1.676-.467-2.88-.72-1.615-.353-2.967-.764-4.061-1.235-1.096-.473-1.97-1.12-2.616-1.937-.648-.826-.972-1.851-.972-3.066 0-1.158.342-2.194 1.025-3.096.683-.904 1.67-1.596 2.959-2.078 1.283-.482 2.794-.723 4.526-.723 1.384 0 2.582.16 3.595.479 1.011.321 1.854.745 2.528 1.276.67.53 1.162 1.09 1.474 1.677.312.59.469 1.165.469 1.726 0 .522-.203.995-.597 1.41a1.971 1.971 0 0 1-1.487.625c-.53 0-.947-.122-1.236-.382-.281-.25-.576-.65-.896-1.206-.404-.776-.887-1.381-1.45-1.814-.548-.425-1.451-.646-2.708-.643-1.164 0-2.094.238-2.797.703-.707.472-1.045 1.02-1.046 1.662.001.402.117.741.35 1.032.236.292.565.546.987.76.423.217.853.385 1.286.506a56.49 56.49 0 0 0 2.171.54c1.265.273 2.412.578 3.443.91 1.029.333 1.907.735 2.632 1.215a5.13 5.13 0 0 1 1.711 1.823c.411.737.616 1.637.616 2.697.001 1.276-.354 2.423-1.062 3.438z"/>
			</symbol>
			<symbol viewBox="0 0 30 26" id="tg-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M.53 12.469l6.912 2.56 2.676 8.539a.816.816 0 0 0 1.293.386l3.853-3.117a1.156 1.156 0 0 1 1.401-.039l6.95 5.007a.816.816 0 0 0 1.276-.489l5.091-24.302a.812.812 0 0 0-1.09-.919L.521 10.955A.807.807 0 0 0 .53 12.47zm9.157 1.197l13.51-8.257c.242-.148.492.178.284.37L12.33 16.063a2.288 2.288 0 0 0-.716 1.373l-.38 2.793c-.05.373-.578.41-.682.049l-1.46-5.093a1.345 1.345 0 0 1 .594-1.519z"/>
			</symbol>
			<symbol viewBox="0 0 31 34" id="vb-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M23.81 1.692a43.599 43.599 0 0 0-16.32 0c-2.368.526-5.348 3.374-5.93 5.664a31.051 31.051 0 0 0 0 13.357c.582 2.29 3.562 5.138 5.93 5.664h.002a.225.225 0 0 1 .183.22v6.492c0 .324.397.484.623.25l3.092-3.166 2.907-2.976a.222.222 0 0 1 .165-.067 43.641 43.641 0 0 0 9.348-.753c2.368-.526 5.349-3.374 5.93-5.664.97-4.432.97-8.925 0-13.357-.581-2.29-3.56-5.138-5.93-5.664zm.082 19.351c-.473 1.003-1.163 1.838-2.157 2.37-.28.15-.616.2-.932.297-.364-.11-.711-.185-1.034-.318-3.339-1.382-6.412-3.164-8.846-5.897-1.385-1.554-2.468-3.308-3.384-5.165-.435-.88-.8-1.795-1.174-2.704-.34-.829.161-1.685.689-2.31.495-.586 1.132-1.034 1.822-1.365.539-.258 1.07-.11 1.463.346.85.984 1.631 2.019 2.264 3.16.389.701.282 1.56-.423 2.037-.171.116-.327.252-.487.383a1.57 1.57 0 0 0-.367.387c-.176.284-.184.62-.071.93.869 2.382 2.334 4.234 4.738 5.232.385.16.77.345 1.214.294.742-.087.983-.899 1.503-1.323.508-.415 1.158-.42 1.705-.074.548.345 1.08.716 1.607 1.092.518.368 1.034.728 1.512 1.148.459.403.617.932.358 1.48zm-4.311-7.762c-.208.003-.126 0-.047-.003-.334-.012-.516-.208-.552-.527-.026-.233-.047-.469-.103-.695-.11-.447-.347-.86-.724-1.134a1.89 1.89 0 0 0-.59-.284c-.268-.077-.546-.056-.814-.122-.29-.07-.45-.305-.405-.577a.525.525 0 0 1 .553-.42c1.694.121 2.904.995 3.077 2.983.012.14.026.288-.005.423a.434.434 0 0 1-.39.356zm-1.053-4.548a5.97 5.97 0 0 0-1.651-.505c-.25-.041-.5-.066-.751-.101-.303-.042-.465-.235-.45-.533.013-.279.217-.48.522-.462 1.003.056 1.97.272 2.862.743 1.812.957 2.847 2.468 3.15 4.485.013.092.035.182.042.274.017.226.028.453.046.752-.008.054-.011.182-.043.303-.116.437-.781.492-.934.05a1.313 1.313 0 0 1-.053-.42c-.001-.923-.202-1.845-.669-2.648a4.935 4.935 0 0 0-2.071-1.938zm5.6 6.235c-.35.004-.508-.288-.531-.601-.045-.62-.076-1.243-.162-1.858-.452-3.245-3.047-5.93-6.285-6.505-.487-.087-.986-.11-1.48-.162-.312-.032-.72-.051-.79-.438-.058-.324.217-.583.526-.6.085-.004.17 0 .254 0 4.194.118.256.01.011.001 4.363.127 7.945 3.016 8.713 7.319.13.734.178 1.484.236 2.229.024.313-.154.61-.493.615z"/>
			</symbol>
			<symbol viewBox="0 0 31 30" id="wa-social" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M15.337 0h-.007C7.059 0 .333 6.728.333 15a14.89 14.89 0 0 0 2.856 8.792l-1.87 5.572 5.766-1.843A14.87 14.87 0 0 0 15.337 30c8.27 0 14.996-6.73 14.996-15S23.608 0 15.337 0zm8.728 21.182c-.362 1.022-1.798 1.87-2.944 2.117-.783.167-1.807.3-5.253-1.129-4.408-1.826-7.247-6.306-7.468-6.596-.212-.29-1.782-2.372-1.782-4.525 0-2.152 1.093-3.2 1.534-3.65.362-.37.96-.538 1.534-.538.185 0 .352.009.502.017.441.018.662.045.953.74.362.872 1.243 3.024 1.348 3.246.107.221.214.521.064.812-.14.3-.265.433-.486.688-.221.255-.431.45-.652.723-.203.239-.432.494-.177.934.255.431 1.137 1.87 2.434 3.025 1.674 1.49 3.032 1.966 3.518 2.169.361.15.793.114 1.057-.167.336-.362.75-.962 1.172-1.552.3-.424.679-.477 1.076-.327.405.141 2.548 1.2 2.989 1.42.44.221.731.326.838.512.105.185.105 1.057-.257 2.08z"/>
			</symbol>
		</svg>
	</div>
</div>