/*
 * The CV template's jQuery plugins are UMD/global scripts that must run as
 * classic <script> tags in a fixed order (see resources/views/cv.blade.php).
 * These globs only register them and the images in the Vite manifest so the
 * view can reference them with Vite::asset().
 */
import.meta.glob('../images/cv/**', { eager: true, query: '?url', import: 'default' });
import.meta.glob('./cv/*.js', { eager: true, query: '?url', import: 'default' });
