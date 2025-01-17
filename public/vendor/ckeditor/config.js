/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */


CKEDITOR.editorConfig = function (config) {
	config.extraPlugins = 'wordcount,notification';
	config.toolbarGroups = [
		{ name: 'clipboard', groups: ['clipboard', 'undo'] },
		{ name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
		{ name: 'links', groups: ['links'] },
		{ name: 'insert', groups: ['insert'] },
		{ name: 'forms', groups: ['forms'] },
		{ name: 'tools', groups: ['tools'] },
		{ name: 'document', groups: ['mode', 'document', 'doctools'] },
		{ name: 'others', groups: ['others'] },
		'/',
		{ name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
		{ name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
		{ name: 'styles', groups: ['styles'] },
		{ name: 'colors', groups: ['colors'] },
		{ name: 'about', groups: ['about'] }
	];

	config.removeButtons = 'Underline,Subscript,Superscript,Image';
	// config.extraPlugins = 'wordcount';
	config.wordcount = {

		// Whether or not you want to show the Word Count
		showWordCount: false,

		// Whether or not you want to show the Char Count
		showCharCount: true,

		countSpacesAsChars: true,

		countHTML: true,

		// Maximum allowed Word Count
		maxWordCount: -1,

		// Maximum allowed Char Count
		maxCharCount: 65535
	};




};


