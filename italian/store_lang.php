<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

$lang = array(
    // module details
    "store"                             => "Store",
    "store_module_name"                 => "Store",
    "store_module_description"          => "Suite e-commerce per Expression Engine",
    "nav_store"                         => "Store",

    // obvious shit
    "actions"                           => "Azioni",
    "enabled"                           => "Abilitato",
    "disabled"                          => "Disabilitato",
    "enable"                            => "Abilita",
    "disable"                           => "Disabilita",
    "missing"                           => "Mancante",
    "true"                              => "Vero",
    "false"                             => "Falso",
    "none"                              => "Nessuno",
    "member"                            => "Utente",
    "message"                           => "Messaggio",
    "options"                           => "Opzioni",
    "default"                           => "Default",
    "rename"                            => "Rinomina",
    "name"                              => "Nome",
    "short_name"                        => "Nome (corto)",
    "new"                               => "Nuovo",
    "manual"                            => "Manuale",
    "from"                              => "Da",
    "to"                                => "A",
    "advanced"                          => "Avanzato",

    // settings
    "settings_general"                  => "Generali",
    "settings_reports"                  => "Reports",
    "settings_conversions"              => "Tracking delle conversioni",
    "settings_email"                    => "Modelli di mail",
    "settings_edit_email"               => "Modifile il modello di email",
    "settings_promo_codes"              => "Codici promozionali",
    "settings_order_fields"             => "Campi dell'ordine",
    "settings_order_statuses"           => "Status dell'ordine",
    "settings_payment"                  => "Metodi di pagamento",
    "settings_shipping"                 => "Metodi di spedizione",
    "settings_regions"                  => "Paesi / Regioni",
    "settings_tax"                      => "Tasse",
    "settings_security"                 => "Sicurezza",

    "currency_symbol"                   => "Simbolo valuta",
    "currency_suffix"                   => "Suffisso valuta",
    "currency_decimals"                 => "Decimali dopo la virgola",
    "currency_dec_point"                => "Separatore decimali",
    "currency_thousands_sep"            => "Separatore migliaia",
    "currency_code"                     => "Codice della valuta",
    "weight_units"                      => "Unit&agrave; di peso",
    "weight_units_kg"                   => "kg",
    "weight_units_lb"                   => "lb",
    "dimension_units"                   => "Unit&agrave; di dimensione",
    "dimension_units_cm"                => "cm",
    "dimension_units_m"                 => "m",
    "dimension_units_ft"                => "ft",
    "dimension_units_in"                => "in",
    "tax_included"                      => "I prezzi sono tasse incluese?",
    "tax_included_y"                    => "Si",
    "tax_included_n"                    => "No",
    "tax_rate"                          => "Tassa",
    "from_email"                        => "Indirizzo email dello store",
    "from_name"                         => "Nome visualizzato per l'email dello store",
    "track_stock"                       => "Aggiorna dinamicamente le disponibilit&agrave;",
    "limit_stock"                       => "Disponiblit&agrave; limitate",
    "show_cp_menu"                      => "Abilit&agrave; il menu Store",
    "default_order_address"             => "Indirizzo di default per la spedizione",
    "shipping_same_as_billing"          => "Usa indirizzo di fatturazione per la spedizione",
    "billing_same_as_shipping"          => "Usa indirizzo di spedizione per la fatturazione",
    "tax_rounding"                      => "Arrotonda i prezzi dopo l'applicazione delle tasse",
    "tax_rounding_subtext"              => "Imposta a si se si intende visualizzare i prezzi comprensivi di tasse sul sito. Questa impostazione fa si che il totale dell'ordine sia calcolato sui prezzi comprensivi di tasse",
    "cc_payment_method"                 => "Metodo di pagamento con Carta di Credito",
    "cc_payment_method_subtext"         => "Se impostato ad Autorizza soltanto, dovrai Catturare manualemnte il pagamento prima che i fondi siano trasferiti sul tuo account.",
    "cc_payment_authorize"              => "Autorizza soltanto",
    "cc_payment_purchase"               => "Acquista (Autorzza e Cattura)",
    "force_member_login"                => "L'utente deve registrarsi per completare l'acquisto",
    "empty_cart_on_logout"              => "Svuota il carrello al logout dell'utente",
    "cart_expiry"                       => "Tempo di permanenza del carrello",
    "cart_expiry_subtext"               => "Imposta in minuti il tempo di inattivit&agrave; oltre il quale il Carrello verr&agrave; svuotato.<br />Default: 1440 (24 ore).",
    "secure_template_tags"              => "Richiedi la connessione SSL per i tag checkout e order",
    "mapped_member_field"               => "Collegati ai Campi Utente (member fields)",
    "optgroup_member_fields"            => "Campi Utente",
    "optgroup_zoo_fields"               => "Campi di Zoo Visitor",
    "defaults"                          => "Defaults",
    "default_country"                   => "Paese di default",
    "default_region"                    => "Regione di default",
    "region_code_error"                 => "I codici delle regioni devono essere univoci.",
    "order_invoice_url"                 => "Indirizzo per la Ricevuta",
    "order_invoice_url_subtext"         => "Mostra il link alla "Ricevuta" nella pagina di dettaglio dell'ordine.<br />e.g. "store_example/order/ORDER_HASH"",
    "google_analytics_ecommerce"        => "Google Analytics Ecommerce Tracking",
    "google_analytics_ecommerce_subtext" => "Il codice di tracking GAdeve essere inserito nella &lt;head&gt; del tuo sito. il codice di tracking dell'ecommerce verr&agrave; aggiunto in automatico.",
    "conversion_tracking_extra"         => "Extra Conversion Tracking Code",
    "conversion_tracking_extra_subtext" => "e.g. il codice di Tracking delle conversioni di Adwords, o di un'altro software di analisi. Puoi utlizzare una variabile d'ordine come {order_total_val} in questa porzione di codice.<br />Questa porzione di condice verr&agrave; visualizzata una volta per ordine, nella pagina di riepilogo (indipendentemente da quante volte un utente visualizza la pagina della ricevuta dell'ordine).",

    // settings reports
    "export_pdf_orientation"            => "Orientamento del report PDF",
    "export_pdf_page_format"            => "Formato del report PDF",
    "pdf_orientation_portrait"          => "Portrait",
    "pdf_orientation_landscape"         => "Landscape",
    "pdf_page_format_a4"                => "A4",
    "pdf_page_format_a3"                => "A3",
    "pdf_page_format_letter"            => "Letter",
    "order_details_header"              => "Intestazione del dettaglio dell'ordine",
    "order_details_header_right"        => "Intestazione destra del dettaglio dell'ordine",
    "order_details_footer"              => "Pi&egrave; di pagina del dettaglio dell'ordine",

    // settings security
    "privileges"                        => "Priviliegi",
    "can_access_settings"               => "Pu&ograve; accedere al pannello di configurazione dello Store?",
    "can_add_payments"                  => "Pu&ograve; aggiungere pagamenti manuali?",
    "store_no_access"                   => "Non hai accesso a questa pagina.",
    "tax_rate"                          => "Percentuale(%)",
    "tax_name"                          => "Nome della tassa",
    "tax_rate_add"                      => "Aggiungi una tassa",
    "no_tax_rates"                      => "Non ci sono tasse configurate.",

    "shipping"                          => "Spedizione",
    "shipping_rule_desc"                => "Descrizione della regola",
    "shipping_filters"                  => "Filtri",
    "shipping_filters_desc"             => "in quale ordine si applica la regola?",
    "shipping_charges"                  => "Importi",
    "shipping_add_plugin"               => "Aggiungi metodo di spedizione",
    "shipping_min_order_qty"            => "Minimo d'ordine (pezzi)",
    "shipping_max_order_qty"            => "Massimo d'ordine (pezzi)",
    "shipping_min_order_total"          => "Minimo d'ordine (importo)",
    "shipping_max_order_total"          => "Massimo d'ordine (importo)",
    "shipping_min_weight"               => "Minimo d'ordine (peso)",
    "shipping_max_weight"               => "Massimo d'ordine (peso)",
    "shipping_base_rate"                => "Importo base",
    "shipping_per_item"                 => "per pezzo",
    "shipping_per_item_rate"            => "Importo per pezzo",
    "shipping_per_weight_rate"          => "Importo per peso (per %s)",
    "shipping_per_weight_unit"          => "per %s",
    "shipping_percent_rate"             => "Percentuale sull'ordine",
    "shipping_priority_desc"            => "I numeri pi&ugrave; alti verranno processati prima",
    "shipping_%_rate"                   => "Importo % sull'ordine",
    "shipping_of_order_total"           => "del totale dell'ordine",
    "shipping_min_rate"                 => "Importo minimo",
    "shipping_max_rate"                 => "Importo massimo",
    "shipping_with_a_min_of"            => "per un minimo di %s",
    "shipping_up_to_a_max_of"           => "fino ad un massimo di %s",
    "shipping_method"                   => "Metodo di spedizione",
    "shipping_method_id"                => "ID del metodo di spedizione",
    "shipping_plugin"                   => "Plugin per la spedizione",
    "shipping_add_rule"                 => "Aggiungi regola per la spedizione",
    "shipping_edit_rule"                => "Modifica regola per la spedizione",
    "add_rule_now"                      => "Dovresti aggiugnere almeni una Regola pe questo plugin.",
    "shipping_default_help"             => "<li>Le regole seguenti verranno valutate nell'ordine qui specificato, se &egrave; stato selezionato questo metodo di spedizione.</li><li>Solo la prima regola che si adatti al carrello dell'utente verr&agrave; processata, tutte le latre verranno ignorate.</li><li>Se nessuna regola si adatta al carrello dell'utente verr&agrave; visualizzato un errore. Assicurati di impostare una regola \"cath-all\" come ultima!</li><li>Puoi impostare una priorit&agrave; per ogni regola per controllare l'ordine in cui esse vengono eseguite. Le regole con una priorit&agrave; maggiore verranno processate per prime.</li>",
    "pre_selected_shipping_method"      => "Metodo di spedizione pre-selezionato per i nuovi carrelli:",
    "store_shipping_default"            => "Plugin di spiedizione di default",
    "store_shipping_fedex"              => "FedEx",
    "store_shipping_ups"                => "UPS",
    "store_shipping_usps"               => "USPS",
    "store_shipping_aus_post"           => "Australia Post",
    "access_key"                        => "Access Key",
    "pickup_type"                       => "Pickup Type",
    "service"                           => "Service",
    "packaging"                         => "Packaging",
    "api_key"                           => "API Key",
    "user_id"                           => "User ID",
    "account_no"                        => "Account No",
    "meter_no"                          => "Meter No",
    "test_mode"                         => "Test Mode",
    "source_city"                       => "Source City",
    "source_zip"                        => "Source ZIP",
    "source_postcode"                   => "Source Postcode",
    "source_country"                    => "Source Country",
    "insure_order"                      => "Insure Order",
    "machinable"                        => "Machinable",
    "container"                         => "Container",
    "size"                              => "Size",
    "first_class_mail_type"             => "First Class Mail Type",
    "surcharge"                         => "Surcharge",
    "dropoff_type"                      => "Dropoff Type",
    "service_type"                      => "Service Type",
    "packaging_type"                    => "Packaging Type",
    "ups_communication_error"           => "Errore di comunicazione con UPS.",
    "aus_post_communication_error"      => "Errore di comunicazione con Australia Post.",
    "shipping_communication_error"      => "Errore di comunicazione con il corriere.",
    "no_rules_match_cart_error"         => "Errore nel calcolo delle spese di spedizione: Nessuna regola si adatta al carrello.",
    "add_payment_method"                => "Aggingi metodo di pagamento",
    "payment_method"                    => "Metodo di pagamento",
    "payment_plugin"                    => "Plugin di pagamento",
    "always_authorize"                  => "Autorizza sempre",
    "always_decline"                    => "Declina sempre",
    "payment_method_no_settings"        => "Questo plugin di pagamento non ha impostazioni.",
    "unique_payment_method_name"        => "Esiste gi&agrave; un metodo di pagamento con questo nome (corto).",
    "valid_payment_method"              => "Metodo di pagamento non valido.",
    "require_accept_terms"              => "Devi accettare le condizioni di vendita.",
    "no_shipping_methods"               => "Metodi di spedizione non configurati.",
    "no_payment_methods"                => "Metodi di pagamento non configurati.",

    // cp pages
    "dashboard"                         => "Riepilogo",
    "nav_dashboard"                     => "Riepilogo",
    "recent_orders"                     => "Ordini recenti",
    "orders"                            => "Ordini",
    "nav_orders"                        => "Ordini",
    "inventory"                         => "Inventario",
    "nav_inventory"                     => "Inventario",
    "reports"                           => "Reports",
    "nav_reports"                       => "Reports",
    "settings"                          => "Impostazioni",
    "nav_settings"                      => "Impostazioni",
    "product_details"                   => "Dettaglio prodotto",
    "order"                             => "Ordine",
    "order_details"                     => "Dettaglio ordine",
    "show_invoice"                      => "Mostra ricevuta",
    "stock"                             => "disponibilit&agrave;",
    "add_payment"                       => "Aggiungi un pagamento",
    "country"                           => "Paese",
    "countries"                         => "Paesi",
    "country_details"                   => "Dettagli paese",
    "region"                            => "Regione",
    "regions"                           => "Regioni",
    "region_any"                        => "(qualsiasi)",
    "postcode"                          => "CAP",
    "iso_code"                          => "Codice ISO",
    "code"                              => "codice",
    "add_region"                        => "Aggiungi una regione...",
    "select_country"                    => "Seleziona il paese",
    "priority"                          => "Priorit&agrave;",
    "plugin"                            => "Plugin",
    "display_order"                     => "Mostra ordine",
    "enable_selected"                   => "Abilita selezionato",
    "disable_selected"                  => "Disabilita selezionato",
    "delete_selected"                   => "Cancella selezionato",
    "restore_defaults"                  => "Reimposta i defaults",
    "delete_confirm"                    => "Conferma la cancellazione",
    "delete_orders_question"            => "Sei proprio sicuro di voler cancellare PERMANENTEMENTE questi ordini?",
    "delete_order_question"             => "Sei proprio sicuro di voler cancellare PERMANENTEMENTE questio ordine?",
    "delete_warning"                    => "QUESTA AZIONE E' IRREVERSIBILE",
    "install_new_site"                  => "Installa un nuovo sito",
    "install_now"                       => "Installa ora",
    "store_not_yet_installed"           => "Store non &egrave; ancora stato installato su questo sito: %s",
    "duplicate_settings_from"           => "Duplica le impostazioni di:",
    "install_example_templates"         => "Installa le template di esempio",
    "site_installed_successfully"       => "Site &egrave; stato installato correttamente!",
    "install_store_super_admin"         => "Per installare Store su questo sito, effettua il login come Super Admin.",

    // cp status messages
    "invalid_order_id"                  => "Ordine non valido!",
    "invalid_promo_code"                => "Codice promozionale non valido!",
    "invalid_shipping_method"           => "Metodo di spedizione non valido!",
    "invalid_tax_rate"                  => "Tassa non valida!",
    "invalid_payment_id"                => "Pagamento non valido!",
    "settings_updated"                  => "Impostazioni aggiornate",
    "regions_updated"                   => "Regioni aggiornate",
    "payment_added"                     => "Aggiunto pagamento",
    "payment_cancelled"                 => "Pagamento cancellato",
    "store_ext_disabled"                => "L'estensione per lo Store &egrave; disabilitata. Clicca qui per abilitarla.",
    "store_ft_disabled"                 => "Il fieldtype per lo Store &egrave; disabilitato. Clicca qui per abilitarlo.",
    "plugin_no_settings"                => "Questo plugin non ha impostazioni!",
    "no_orders_selected"                => "Nessun ordine selezionato!",

    // products
    "entry_id"                          => "Entry ID",
    "product"                           => "Prodotto",
    "price"                             => "Prezzo",
    "sale_price"                        => "Prezzo scontato",
    "sale_price_enabled"                => "Attiva prezzo scontato?",
    "sale_start_date"                   => "Data di inizio dello sconto",
    "sale_end_date"                     => "Data di fine dello sconto",
    "weight"                            => "Peso",
    "dimension_l"                       => "Lunghezza",
    "dimension_w"                       => "Larghezza",
    "dimension_h"                       => "Altezza",
    "free_shipping"                     => "Spedizione gratuita",
    "stock_description"                 => "Descrizione disponibilit&agrave;",
    "sku"                               => "SKU",
    "stock_level"                       => "Disponiblit&agrave;",
    "min_order_qty"                     => "Quantit&agrave; minima d'ordine",
    "total_stock"                       => "Totale pezzi disponibili",
    "price_modifier"                    => "Modificatori di prezzo",
    "product_tax_exempt"                => "Questo prodotto &egrave; esentasse",

    // inventory
    "last_status_update"                => "Ultimo update di status",

    // orders
    "order_id"                          => "ID dell'ordine",
    "billing_details"                   => "Dati di fatturazione",
    "shipping_details"                  => "Dati di spedizione",
    "custom_details"                    => "Dettagli custom",
    "billing_name"                      => "Nominativo per fatturazione",
    "billing_address"                   => "Indirizzo di fatturazione",
    "billing_address1"                  => "Indirizzo di fatturazione 1",
    "billing_address2"                  => "Indirizzo di fatturazione 2",
    "billing_address3"                  => "Indirizzo di fatturazione 2",
    "billing_region"                    => "Regione di fatturazione",
    "billing_country"                   => "Paese di fatturazione",
    "billing_postcode"                  => "CAP per la fatturazione",
    "billing_phone"                     => "Telefono perla fatturazione",
    "shipping_name"                     => "Nominativo per la spedizione",
    "shipping_address"                  => "Infdirizzo di spedizione",
    "shipping_address1"                 => "Infdirizzo di spedizione 1",
    "shipping_address2"                 => "Infdirizzo di spedizione 2",
    "shipping_address3"                 => "Infdirizzo di spedizione 3",
    "shipping_region"                   => "Regione di spedizione",
    "shipping_country"                  => "Paese di spedizione",
    "shipping_postcode"                 => "CAP per la spedizione",
    "shipping_phone"                    => "Telefono per la spedizione",
    "order_email"                       => "E-mail",
    "order_date"                        => "Data dell'ordine",
    "item"                              => "Oggetto",
    "items"                             => "Oggetti",
    "quantity"                          => "Quantit&agrave;",
    "total"                             => "Totale",
    "order_total"                       => "Totale dell'ordine",
    "overpaid"                          => "Sovrappaggato",
    "balance_due"                       => "Dovuto",
    "with_selected"                     => "Seleziona azione",
    "gateway"                           => "Gateway",
    "modifiers"                         => "Modifiicatori",
    "order_subtotal"                    => "Subtotale ordine",
    "order_tax_subtotal"                => "Subtotlae tasse",
    "order_discount"                    => "Sconto sull'ordine",
    "order_shipping"                    => "Spedizione",
    "order_shipping_tax"                => "Importo tasse sulla spedizione",
    "order_tax"                         => "Tassa",
    "order_status_history"              => "Storia degli status dell'ordine",
    "order_status_updated"              => "Status aggiornato",
    "status"                            => "Status",
    "yesterday"                         => "Ieri",
    "prev_month"                        => "Mese precedente",
    "details"                           => "Dettagli",
    "paid"                              => "Pagato",
    "paid?"                             => "Pagato?",
    "unpaid"                            => "Non pagato",
    "incomplete"                        => "Non completato",
    "filter_by_payment_status"          => "Filtra per status pagamento",
    "edit_status"                       => "Modifica status",
    "order_deleted"                     => "Ordine cancellato con successo",
    "orders_deleted"                    => "Ordini cancellati con successo",
    "filter_by_order_status"            => "Filtra per status ordine",
    "dataTables_info"                   => "Visualizza da _START_ a _END_ di _TOTAL_ record",
    "dataTables_info_empty"             => "Visualizza da 0 a 0 di 0 record",
    "dataTables_info_filtered"          => "(filtrato da _MAX_ record totali)",
    "dataTables_processing"             => "Attendi...",
    "error_processing_order"            => "Si &egrave; verificato un errore durante la registrazione del tuo ordine.",
    "submit_order_not_logged_in"        => "Devi aver effettuato il login per completare l'ordine.",

    // order payments
    "amount"                            => "Importo",
    "owing"                             => "Importo dovuto",
    "payments"                          => "Pagamenti",
    "payment_id"                        => "ID Transazione",
    "payment_date"                      => "Data pagamento",
    "payment_dates"                     => "Date pagamenti",
    "payment_reference"                 => "Riferimento",
    "payment_message"                   => "Messaggio pagamento",
    "payment_status"                    => "Status",
    "payment_status_authorized"         => "Autorizzato",
    "payment_status_complete"           => "Completato",
    "payment_status_failed"             => "Fallito",
    "payment_status_pending"            => "In attesa",
    "payment_status_refunded"           => "Rimbosato",
    "reference"                         => "Riferimento",
    "capture_payment"                   => "Cattura",
    "capture_payment_confirm"           => "Sei sicuro di voler catturare questo pagamento?",
    "refund_payment"                    => "Rimborsa",
    "refund_payment_confirm"            => "Sei sicuro di voler rimborsare questo pagamento?",
    "no_payments"                       => "Non ci sono pagamenti registrati per questo ordine.",
    "recorded_by"                       => "Registrato da",
    "payment_is_zero"                   => "L'importo per il pagamento non pu&ograve; essere zero.",
    "store_currency_non_zero"           => "Il campo %s non pu&ograve; essere zero.",
    "payment_capture_success"           => "Pagamento catturato con successo.",
    "payment_capture_failure"           => "La cattura del pagamento non &egrave; andata a buon fine.",
    "payment_refund_success"            => "Pagamento rimborsato con successo.",
    "payment_refund_failure"            => "Il rimborso del pagamento non &egrave; andato a buon fine.",
    "ideal_choose_bank"                 => "Scegli la tua banca...",
    "ideal_other_banks"                 => "---Altre banche---",

    // module tags
    "add_to_cart"                       => "Aggiungi al carrello",
    "buy_now"                           => "Compra ora",
    "empty_cart"                        => "Svuota il carrello",
    "update_totals"                     => "Aggiorna i totali",
    "submit_order"                      => "Invia ordine",
    "invalid_parameter"                 => "Il parametro %s &egrave; mancante o non valido!",
    "required_field"                    => "%s &egrave; obbligatorio!",
    "download_not_found"                => "Non &egrave; possibile trovare il file ID",

    // dashboard page
    "graph_options"                     => "Impostazioni grafico",
    "data_series"                       => "Nome della serie: ",
    "dashboard_graph_daily"             => "Vendite per giorno",
    "dashboard_graph_weekly"            => "Vendite per settimana",
    "dashboard_graph_monthly"           => "Vendite per mese",
    "dashboard_graph_quarterly"         => "Vendite per trimestre",
    "showing"                           => "Visualizzazione",
    "daily_sales"                       => "Vendite giornaliere",
    "weekly_sales"                      => "Vendite settimanali",
    "monthly_sales"                     => "Vendite mensili",
    "quarterly_sales"                   => "Vendite trimestrali",

    // reports page
    "view_report"                       => "Visualizza Report",
    "export_pdf"                        => "Esporta come PDF",
    "export_csv"                        => "Esporta comes CSV",
    "sales_report1"                     => "Ordini",
    "sales_report2"                     => "Prodotti venduti",
    "stock_report1"                     => "Assortimento pi&ugrave; venduto",
    "stock_report2"                     => "Prodotti da riassortire",
    "stock_report3"                     => "Inventario (catalogo)",
    "orders_report"                     => "Report ordini",
    "orders_report_all_orders"          => "Tutti gli ordini",
    "orders_report_list_all"            => "Elenca gli ordini fatti in",
    "orders_report_with_status"         => "con lo status",
    "total_gross_sales"                 => "Totale vendite (lordo)",
    "total_net_sales"                   => "Total vendite (netto)",
    "quantity_sold"                     => "Quantit&agrave; venduta",
    "totals"                            => "Totali",
    "custom_range"                      => "Intervallo di date custom",
    "product_title"                     => "Nome prodotto",
    "current_price"                     => "Prezzo attuale",
    "average_price"                     => "Prezzo medio",
    "net_sales"                         => "Vendite nette",
    "current_stock_level"               => "Livello assortimento corrente",
    "total_stock_value"                 => "Valore totale assortimento",
    "date_paid"                         => "Data di pagamento",
    "item_qty"                          => "Quatit&agrave; oggetti",
    "item_price"                        => "Prezzo dell'oggetto",
    "item_subtotal"                     => "Subtotale",
    "order_qty"                         => "Quantit&agrave; ordine",
    "total_sales"                       => "Totale vendite",
    "products_sold"                     => "Prodotti venduti",
    "starting_from"                     => "a partire da",
    "through"                           => "fino",
    "ordered_by"                        => "ordina per",
    "sorted_by"                         => "ordina dal",
    "total_sales_report_desc"           => "Dati degli ordini e vendite dale",
    "stock_products_report_desc"        => "Prodotti venduti in",
    "stock_inventory_report_desc"       => "SKU di tutti i prodotti",
    "invalid_report"                    => "Report specificato non valido!",

    // promo codes page
    "promo_type"                        => "Tipologia",
    "promo_type_p"                      => "Sconto percentuale",
    "promo_type_v"                      => "Sconto assoluto",
    "promo_start_date"                  => "Data di inizio",
    "promo_end_date"                    => "Data di fine",
    "promo_value"                       => "Importo",
    "promo_code"                        => "Codice promozionale",
    "promo_cat_group"                   => "Gruppo Categoria",
    "promo_member_group"                => "Restringi a Member Group",
    "use_limit"                         => "Limite utilizzo totale",
    "per_user_limit"                    => "Limite utilizzo per utente",
    "new_promo_code"                    => "Nuovo codice promozionale",
    "edit_promo_code"                   => "Modifica codice promozionale",
    "applies_to"                        => "Si apllica a",
    "free_shipping?"                    => "Spedizione gratuita?",
    "specific_products"                 => "Prodotti specifici",
    "no_promo_codes"                    => "Non ci sono codici promozionali definiti.",
    "if_promo_code_empty_spiel"         => "Se vuoto, il codice promozionale si applicher&agrave; automaticamente a tutti gli ordini secondo le regole stabilite.",
    "promo_code_invalid"                => "Codice promozionale non valido.",
    "promo_code_expired"                => "Qusto codice promozionale non &egrave; pi&ugrave; attivo.",
    "promo_code_user_limit"             => "Ai raggiunto il limite di utilizzo per questo codice promozionale.",
    "promo_code_no_longer_valid"        => "Il codice promozionale che stai utilizzando non &egrave; pi&ugrave; valido.",

    // email page
    "new_email_template"                => "Nuova template email",
    "email_template"                    => "Template email",
    "email_name"                        => "Nome",
    "email_subject"                     => "Oggetto dell'email",
    "order_confirmation"                => "Conferma d'ordine",
    "payment_confirmation"              => "Conferma di pagamento",
    "invalid_template_id"               => "Template ID non valido",
    "invalid_template_ids"              => "Template ID non validi",
    "no_system_email_delete"            => "La template %s non pu&ograve; essere cancellata.",
    "invalid_selection"                 => "Selezione non valida",
    "email_templates_can_contain"       => "La template email pu&ograve; contentere informazioni relative ad un ordine o ad un utente.",
    "email_templates_to_display_order_details" => "Per visualizzare i dettagli dell'ordine usa i tag di template. Molte delle variabili disponibili nel tag order possono venire usate, come:",
    "email_templates_to_display_items"  => "Per visualizzare informazioni riguardo gli oggetti usa l'items loop:",
    "email_templates_member_details"    => "Se l'ordine &egrave; stato effettauto da un utente registrato &egrave; possibnile visualizzare anche i dettagli dell'utente:",

    // fields page
    "order_status"                      => "Status dell'ordine",
    "order_statuses"                    => "Tutti gli status dell'ordine",
    "status_color"                      => "Colore dello status",
    "orders_field_name"                 => "Nome dei campi dell'ordine",
    "required"                          => "Obbligatorio",
    "status_in_use"                     => "Nota: Questo status non pu&ograve; essere rinominato o cancellato perch&eacute; &egrave; associato gi&agrave; ad alcuni ordini.",
    "status_is_default"                 => "Nota: Questo status non pu&ograve; essere cancellato perch&eacute; &egrave; attualmente lo status di default dell'ordine.",
    "prices_excluding_tax"              => "Tutti i prezzi sono tasse escluse.",
    "tax_shipping"                      => "Calcola le tasse anche sulle spese di spedizione?",

    // payment gateway statuses
    "invalid_driver"                    => "Driver non valido",
    "invalid_order"                     => "Ordine non valido",
    "invalid_submission"                => "Invio non vallido",
    "payment_plugin_load_error"         => "Impossibile caricare il plugin di pagamento",
    "order_already_paid"                => "L'ordine &egrave; gi&agrave; stato saldato",

    // publish page
    "shipping"                          => "Spedizione",
    "pricing"                           => "Prezzo",
    "product_modifiers"                 => "Modificatori prodotto",
    "mod_type"                          => "Tipo modificatore",
    "mod_instructions"                  => "Istruzioni",
    "variation"                         => "Variazione",
    "variation_single_sku"              => "Variazione (unico SKU)",
    "text_input"                        => "Campo di testo",
    "option"                            => "Opzione",
    "add_new_option"                    => "Nuova opzione",
    "add_product_modifier"              => "Nuovo modificatore prodotto",
    "no_product_modifiers_defined"      => "Nessun modificatore prodotto definito",
    "stock_control"                     => "Controlla la disponibilit&agrave;",
    "remove"                            => "Rimuovi",
    "sku_required"                      => "Il campo SKU &egrave; obbligatorio",
    "sku_too_long"                      => "Il campo SKU non pu&ograve; essere maggiore di 20 caratteri",
    "sku_not_unique"                    => "Il campo SKU deve essere univoco",
    "handling"                          => "Tariffa di gestione (handling)",

    // status pages
    "new_order_status"                  => "Nuovo status ordine",
    "edit_order_status"                 => "Modifica status ordine",
    "status_field_name"                 => "Nome del campo status",
    "status_field_value"                => "Valore del campo status",
    "status_name"                       => "Nome",
    "status_highlight"                  => "Colore di evidenza",
    "add_new_status"                    => "Aggiungi un nuovo status",
    "make_default"                      => "Rendi default",
    "updated_by"                        => "Aggiornato da",
    "invalid_order_status"              => "Status ordine non valido",
    "duplicate_status_error"            => "Il nome dello status deve essere univoco.",
);