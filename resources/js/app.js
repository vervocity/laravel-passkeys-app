import './bootstrap';
import {browserSupportsWebAuthn, startRegistration, startAuthentication, } from "@simplewebauthn/browser";

const normalizeWebAuthnOptions = (options) => options?.optionsJSON ?? options;

window.startRegistration = (options) => startRegistration(normalizeWebAuthnOptions(options));
window.browserSupportsWebAuthn = browserSupportsWebAuthn;
window.startAuthentication = (options, useBrowserAutofill = false) =>
	startAuthentication(normalizeWebAuthnOptions(options), useBrowserAutofill);
