import { ScriptLoader } from './utils/ScriptLoader.js';

const routes = {
	'/login': [
		{
			scriptName: 'input-animation',
			scriptPath: '/scripts/animations/input-animation.js',
		},
	],
	'/register': [
		{
			scriptName: 'input-animation',
			scriptPath: '/scripts/animations/input-animation.js',
		},
	],
};

document.addEventListener('DOMContentLoaded', () => {
	const currentPath = window.location.pathname;
	for (const route in routes) {
		const scripts = routes[route];
		for (const script of scripts) {
			if (route === currentPath || currentPath.includes(route)) {
				const { scriptName, scriptPath, initFunction } = script;

				ScriptLoader.loadScript(scriptName, scriptPath, initFunction);
			}
		}
	}
});
