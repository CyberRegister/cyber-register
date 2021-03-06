<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class ReservedUsernames.
 */
class ReservedUsernames implements Rule
{
    /** @var string[] */
    private $blacklist = [
        '0', 'about', 'access', 'ad', 'add', 'adm', 'admin', 'ads', 'adult', 'ajax', 'all', 'alpha', 'anon', 'api',
        'app', 'apps', 'asct', 'asset', 'atom', 'auth', 'avatar', 'backup', 'banner', 'beta', 'bin', 'blog', 'blogs',
        'board', 'book', 'bot', 'bots', 'bug', 'cache', 'call', 'cancel', 'career', 'cart', 'cgi', 'chat', 'check',
        'client', 'code', 'config', 'corp', 'create', 'css', 'data', 'db', 'delete', 'demo', 'design', 'dev', 'devel',
        'diary', 'dict', 'die', 'dir', 'dist', 'doc', 'docs', 'domain', 'edit', 'editor', 'edu', 'email', 'empty',
        'end', 'entry', 'error', 'errors', 'eval', 'event', 'exit', 'faq', 'feed', 'feeds', 'file', 'files', 'first',
        'flash', 'fleet', 'fleets', 'flog', 'follow', 'forgot', 'form', 'forum', 'forums', 'free', 'friend', 'ftp',
        'gadget', 'game', 'games', 'get', 'gift', 'gifts', 'gist', 'github', 'graph', 'group', 'groups', 'guest',
        'guests', 'help', 'home', 'host', 'howto', 'hpg', 'html', 'http', 'httpd', 'https', 'i', 'iamges', 'icon',
        'icons', 'id', 'idea', 'ideas', 'image', 'images', 'imap', 'img', 'index', 'indice', 'info', 'invite', 'ipad',
        'iphone', 'irc', 'is', 'issue', 'issues', 'it', 'item', 'items', 'java', 'job', 'jobs', 'join', 'js', 'json',
        'jump', 'last', 'legal', 'link', 'links', 'linux', 'list', 'lists', 'log', 'log-in', 'log_in', 'login',
        'logout', 'logs', 'm', 'mac', 'mail', 'mail1', 'mail2', 'mail3', 'mail4', 'mail5', 'mailer', 'manual', 'map',
        'maps', 'master', 'me', 'media', 'member', 'mine', 'mis', 'mob', 'mobile', 'movie', 'movies', 'mp3', 'msg',
        'msn', 'music', 'mx', 'my', 'mysql', 'name', 'named', 'nan', 'navi', 'net', 'new', 'news', 'nick', 'notes',
        'notify', 'ns', 'ns1', 'ns10', 'ns2', 'ns3', 'ns4', 'ns5', 'ns6', 'ns7', 'ns8', 'ns9', 'null', 'oauth', 'offer',
        'offers', 'old', 'online', 'openid', 'order', 'orders', 'owner', 'owners', 'page', 'pager', 'pages', 'panel',
        'perl', 'phone', 'photo', 'photos', 'php', 'pic', 'pics', 'ping', 'plan', 'plans', 'plugin', 'policy', 'pop',
        'pop3', 'portal', 'post', 'posts', 'pr', 'press', 'price', 'promo', 'pub', 'public', 'put', 'python', 'query',
        'random', 'read', 'readme', 'recent', 'remove', 'report', 'req', 'reset', 'roc', 'root', 'rss', 'ruby', 'rule',
        'sag', 'sale', 'sales', 'sample', 'save', 'school', 'script', 'search', 'secure', 'self', 'send', 'server',
        'setup', 'share', 'shop', 'show', 'signin', 'signup', 'site', 'sites', 'smtp', 'source', 'spec', 'sql', 'src',
        'ssh', 'ssl', 'staff', 'stage', 'start', 'stat', 'state', 'static', 'stats', 'status', 'store', 'stores',
        'style', 'svn', 'swf', 'sys', 'system', 'tablet', 'tag', 'talk', 'task', 'tasks', 'team', 'teams', 'tech',
        'telnet', 'term', 'terms', 'test', 'test1', 'test2', 'test3', 'teste', 'tests', 'theme', 'themes', 'thread',
        'tmp', 'todo', 'tool', 'tools', 'top', 'topic', 'topics', 'tos', 'tour', 'trends', 'tux', 'tv', 'undef',
        'update', 'upload', 'url', 'usage', 'user', 'users', 'vendas', 'ver', 'video', 'videos', 'watch', 'web',
        'widget', 'wiki', 'win', 'word', 'work', 'works', 'ww', 'wws', 'www', 'www1', 'www2', 'www3', 'www4', 'www5',
        'www6', 'www7', 'wwws', 'wwww', 'xfn', 'xml', 'xmpp', 'xpg', 'xxx', 'yaml', 'year', 'yml', 'you',
    ];

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($attribute !== 'cyber_code') {
            return true;
        }

        return !in_array(strtolower($value), $this->blacklist, true);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Deze cybercode is niet toegestaan.';
    }
}
