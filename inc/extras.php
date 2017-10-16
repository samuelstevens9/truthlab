<?php

function is_the_blog() {
	return is_home() || is_archive() || is_single();
}