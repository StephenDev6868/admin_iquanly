--
-- PostgreSQL database dump
--

-- Dumped from database version 16.0
-- Dumped by pg_dump version 16.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: boards; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.boards (
    id bigint NOT NULL,
    company_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.boards OWNER TO "default";

--
-- Name: boards_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.boards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.boards_id_seq OWNER TO "default";

--
-- Name: boards_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.boards_id_seq OWNED BY public.boards.id;


--
-- Name: companies; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.companies (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    tax_id character varying(255),
    address character varying(255),
    email character varying(255),
    website character varying(255),
    agent character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    phone_number character varying(255)
);


ALTER TABLE public.companies OWNER TO "default";

--
-- Name: companies_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.companies_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.companies_id_seq OWNER TO "default";

--
-- Name: companies_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.companies_id_seq OWNED BY public.companies.id;


--
-- Name: customers; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.customers (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    address character varying(255),
    email character varying(255),
    postcode character varying(255),
    phone_number character varying(255),
    nation character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    tax character varying(255)
);


ALTER TABLE public.customers OWNER TO "default";

--
-- Name: customers_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.customers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.customers_id_seq OWNER TO "default";

--
-- Name: customers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.customers_id_seq OWNED BY public.customers.id;


--
-- Name: materials; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.materials (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    unit character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    unit_quota character varying(255),
    num_quota character varying(255)
);


ALTER TABLE public.materials OWNER TO "default";

--
-- Name: materials_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.materials_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.materials_id_seq OWNER TO "default";

--
-- Name: materials_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.materials_id_seq OWNED BY public.materials.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO "default";

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.migrations_id_seq OWNER TO "default";

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: orders; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.orders (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    detail_product jsonb,
    user_ids jsonb,
    device_ids jsonb,
    tool_ids jsonb,
    start_at timestamp(0) without time zone,
    end_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    loss character varying(255),
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.orders OWNER TO "default";

--
-- Name: orders_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.orders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.orders_id_seq OWNER TO "default";

--
-- Name: orders_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.orders_id_seq OWNED BY public.orders.id;


--
-- Name: partners; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.partners (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    address character varying(255),
    email character varying(255),
    postcode character varying(255),
    phone_number character varying(255),
    nation character varying(255),
    type_supply character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    tax character varying(255)
);


ALTER TABLE public.partners OWNER TO "default";

--
-- Name: partners_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.partners_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.partners_id_seq OWNER TO "default";

--
-- Name: partners_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.partners_id_seq OWNED BY public.partners.id;


--
-- Name: permissions; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.permissions OWNER TO "default";

--
-- Name: permissions_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.permissions_id_seq OWNER TO "default";

--
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;


--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO "default";

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.personal_access_tokens_id_seq OWNER TO "default";

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: product_steps; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.product_steps (
    id bigint NOT NULL,
    name character varying(255),
    description character varying(255),
    "time" character varying(255),
    coefficient character varying(255),
    unit_price character varying(255),
    product_id bigint,
    user_ids jsonb,
    start_at timestamp(0) without time zone,
    end_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.product_steps OWNER TO "default";

--
-- Name: product_steps_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.product_steps_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.product_steps_id_seq OWNER TO "default";

--
-- Name: product_steps_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.product_steps_id_seq OWNED BY public.product_steps.id;


--
-- Name: products; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.products (
    id bigint NOT NULL,
    creator_id bigint,
    name character varying(255),
    code character varying(255),
    description character varying(255),
    start_at timestamp(0) without time zone,
    end_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    size character varying(255) DEFAULT 'M'::character varying,
    part_number character varying(255),
    materials jsonb
);


ALTER TABLE public.products OWNER TO "default";

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.products_id_seq OWNER TO "default";

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- Name: roles; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    permissions jsonb NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.roles OWNER TO "default";

--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.roles_id_seq OWNER TO "default";

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;


--
-- Name: suppliers; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.suppliers (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    address character varying(255),
    tax character varying(255),
    type_supply character varying(255),
    piority character varying(255),
    dept character varying(255),
    money_tc character varying(255),
    phone_number character varying(255),
    postcode character varying(255),
    email character varying(255)
);


ALTER TABLE public.suppliers OWNER TO "default";

--
-- Name: suppliers_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.suppliers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.suppliers_id_seq OWNER TO "default";

--
-- Name: suppliers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.suppliers_id_seq OWNED BY public.suppliers.id;


--
-- Name: user_salaries; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.user_salaries (
    id bigint NOT NULL,
    user_id bigint,
    work_day character varying(255),
    permitted_day_off character varying(255),
    not_allowed_day_off character varying(255),
    overtime character varying(255),
    late character varying(255),
    early character varying(255),
    support_money character varying(255),
    advance character varying(255),
    sum character varying(255),
    start_at timestamp(0) without time zone,
    end_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.user_salaries OWNER TO "default";

--
-- Name: user_salaries_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.user_salaries_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.user_salaries_id_seq OWNER TO "default";

--
-- Name: user_salaries_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.user_salaries_id_seq OWNED BY public.user_salaries.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    full_name character varying(255),
    cccd character varying(255),
    birthday timestamp(0) without time zone,
    phone_number character varying(255),
    login_id character varying(255),
    password character varying(255),
    is_super_admin boolean DEFAULT false NOT NULL,
    remember_token character varying(100),
    role_id bigint,
    board_id bigint,
    begin_work timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    email character varying(255),
    status_work smallint DEFAULT '1'::smallint NOT NULL,
    company_id bigint,
    stk character varying(255),
    bank character varying(255),
    title_level character varying(255),
    is_rent_moto smallint DEFAULT '1'::smallint NOT NULL,
    amount_month character varying(255),
    pass_init character varying(255),
    first_login timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO "default";

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_id_seq OWNER TO "default";

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: w_devices; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.w_devices (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    date_buy character varying(255),
    date_warranty character varying(255),
    in_charge_user bigint,
    status smallint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.w_devices OWNER TO "default";

--
-- Name: w_devices_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.w_devices_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.w_devices_id_seq OWNER TO "default";

--
-- Name: w_devices_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.w_devices_id_seq OWNED BY public.w_devices.id;


--
-- Name: w_materials; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.w_materials (
    id bigint NOT NULL,
    quantity_input character varying(255),
    quantity_contain character varying(255),
    quantity_use character varying(255),
    in_charge_user bigint,
    date_added timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    material_id bigint NOT NULL,
    supplier_id bigint NOT NULL
);


ALTER TABLE public.w_materials OWNER TO "default";

--
-- Name: w_materials_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.w_materials_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.w_materials_id_seq OWNER TO "default";

--
-- Name: w_materials_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.w_materials_id_seq OWNED BY public.w_materials.id;


--
-- Name: w_semi_products; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.w_semi_products (
    id bigint NOT NULL,
    name character varying(255),
    sd_map jsonb,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.w_semi_products OWNER TO "default";

--
-- Name: w_semi_products_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.w_semi_products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.w_semi_products_id_seq OWNER TO "default";

--
-- Name: w_semi_products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.w_semi_products_id_seq OWNED BY public.w_semi_products.id;


--
-- Name: w_tools; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.w_tools (
    id bigint NOT NULL,
    name character varying(255),
    code character varying(255),
    date_buy character varying(255),
    date_warranty character varying(255),
    quantity integer,
    in_charge_user bigint,
    status smallint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.w_tools OWNER TO "default";

--
-- Name: w_tools_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.w_tools_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.w_tools_id_seq OWNER TO "default";

--
-- Name: w_tools_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.w_tools_id_seq OWNED BY public.w_tools.id;


--
-- Name: work_quantities; Type: TABLE; Schema: public; Owner: default
--

CREATE TABLE public.work_quantities (
    id bigint NOT NULL,
    product_step_id bigint NOT NULL,
    product_id bigint NOT NULL,
    user_id bigint NOT NULL,
    quantity bigint,
    date_work timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.work_quantities OWNER TO "default";

--
-- Name: work_quantities_id_seq; Type: SEQUENCE; Schema: public; Owner: default
--

CREATE SEQUENCE public.work_quantities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.work_quantities_id_seq OWNER TO "default";

--
-- Name: work_quantities_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: default
--

ALTER SEQUENCE public.work_quantities_id_seq OWNED BY public.work_quantities.id;


--
-- Name: boards id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.boards ALTER COLUMN id SET DEFAULT nextval('public.boards_id_seq'::regclass);


--
-- Name: companies id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.companies ALTER COLUMN id SET DEFAULT nextval('public.companies_id_seq'::regclass);


--
-- Name: customers id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.customers ALTER COLUMN id SET DEFAULT nextval('public.customers_id_seq'::regclass);


--
-- Name: materials id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.materials ALTER COLUMN id SET DEFAULT nextval('public.materials_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: orders id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.orders ALTER COLUMN id SET DEFAULT nextval('public.orders_id_seq'::regclass);


--
-- Name: partners id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.partners ALTER COLUMN id SET DEFAULT nextval('public.partners_id_seq'::regclass);


--
-- Name: permissions id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: product_steps id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.product_steps ALTER COLUMN id SET DEFAULT nextval('public.product_steps_id_seq'::regclass);


--
-- Name: products id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


--
-- Name: suppliers id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.suppliers ALTER COLUMN id SET DEFAULT nextval('public.suppliers_id_seq'::regclass);


--
-- Name: user_salaries id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.user_salaries ALTER COLUMN id SET DEFAULT nextval('public.user_salaries_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Name: w_devices id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_devices ALTER COLUMN id SET DEFAULT nextval('public.w_devices_id_seq'::regclass);


--
-- Name: w_materials id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_materials ALTER COLUMN id SET DEFAULT nextval('public.w_materials_id_seq'::regclass);


--
-- Name: w_semi_products id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_semi_products ALTER COLUMN id SET DEFAULT nextval('public.w_semi_products_id_seq'::regclass);


--
-- Name: w_tools id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_tools ALTER COLUMN id SET DEFAULT nextval('public.w_tools_id_seq'::regclass);


--
-- Name: work_quantities id; Type: DEFAULT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.work_quantities ALTER COLUMN id SET DEFAULT nextval('public.work_quantities_id_seq'::regclass);


--
-- Data for Name: boards; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.boards (id, company_id, name, created_at, updated_at, deleted_at) FROM stdin;
1	1	TỔ HOÀN THÀNH	2023-10-09 04:14:26	2023-10-09 04:14:26	\N
2	1	TỔ SẢN XUẤT	2023-10-09 04:14:26	2023-10-09 04:14:26	\N
3	1	TỔ ĐIỀU HÀNH	2023-10-09 04:14:26	2023-10-09 04:14:26	\N
4	1	TỔ SẢN XUẤT	2023-10-09 04:14:26	2023-10-09 14:07:50	2023-10-09 14:07:50
\.


--
-- Data for Name: companies; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.companies (id, name, tax_id, address, email, website, agent, created_at, updated_at, phone_number) FROM stdin;
1	CÔNG TY TNHH TM&DV 8688	0401955409	TP DA NANG	info@8688.vn	8688.vn	Trần Thị Phương Hoa	2023-10-09 04:14:26	2023-10-21 06:50:45	0941098688
\.


--
-- Data for Name: customers; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.customers (id, name, code, address, email, postcode, phone_number, nation, created_at, updated_at, deleted_at, tax) FROM stdin;
1	ABC CO., LTD	142	1123123 aa. a a a a	ABC@naver.com	1333333	0941098688	Hàn Quốc	2023-11-01 04:42:31	2023-11-01 04:42:31	\N	1111
2	AR	139	1	1	1	1	USA	2023-11-07 08:19:16	2023-11-07 08:19:16	\N	1
\.


--
-- Data for Name: materials; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.materials (id, name, code, unit, created_at, updated_at, deleted_at, unit_quota, num_quota) FROM stdin;
6	NHÃN SIZE L	NHANL	CÁI	2023-11-08 04:19:19	2023-11-09 07:29:19	\N	CÁI/CUỘN	6000
7	NHÃN SIZE XL	NHANXL	CÁI	2023-11-08 04:19:57	2023-11-09 07:29:19	\N	CÁI/CUỘN	6000
8	NHÃN SIZE 2XL	NHAN2XL	CÁI	2023-11-08 04:20:31	2023-11-09 07:29:19	\N	CÁI/CUỘN	6000
9	NHÃN SIZE 3XL	NHAN3XL	CÁI	2023-11-08 04:20:46	2023-11-09 07:29:19	\N	CÁI/CUỘN	6000
10	NHÃN SIZE 4XL	NHAN4XL	CÁI	2023-11-08 04:21:02	2023-11-09 07:29:19	\N	CÁI/CUỘN	6000
16	GIẤY NHÃN DECAL 4"x6"x50m	DECAL	CÁI	2023-11-09 07:24:40	2023-11-09 07:29:19	\N	m/CUỘN	50
17	RUY BĂNG IN MÃ VẠCH Wax 110mm x 300m	RUYBANG110	CUỘN	2023-11-09 07:27:57	2023-11-09 07:29:19	\N	m/CUỘN	300
18	BĂNG KEO 7.0x100Y 050	BANGKEO7	CUỘN	2023-11-09 07:36:22	2023-11-09 07:36:22	\N	KG/CUỘN	0,4
19	CHỈ COTTON TRẮNG	CHITRANG	CUỘN	2023-11-09 07:38:17	2023-11-09 07:38:17	\N	KG/CUỘN	0,2
20	CHỈ COTTON ĐEN	CHIDEN	CUỘN	2023-11-09 07:40:42	2023-11-09 07:40:42	\N	KG/CUỘN	0,2
21	CHỈ COTTON CAM	CHICAM	CÁI	2023-11-09 07:44:36	2023-11-16 03:36:07	\N	CÁI/CUỘN	0,2
22	CHỈ COTTON XÁM	CHIXAM	CÁI	2023-11-09 07:49:43	2023-11-16 03:36:07	\N	CÁI/CUỘN	0,2
23	CHỈ TƠ ĐEN	CHITODEN	KG	2023-11-09 08:17:15	2023-11-16 03:36:07	\N	m/KG	60000
24	CHỈ TƠ ĐEN	CHITODEN	KG	2023-11-09 08:17:47	2023-11-16 03:36:07	\N	m/KG	60000
25	TÚI NANO XANH LÁ	TUINANOXL	KG	2023-11-09 08:20:21	2023-11-16 03:36:07	\N	KG/KG	1
26	TÚI NANO XANH DƯƠNG	TUINANOXD	KG	2023-11-09 08:20:58	2023-11-16 03:36:07	\N	KG/KG	1
27	THÙNG CARTON 45*41	CARTON4541	CÁI	2023-11-16 03:32:21	2023-11-16 03:36:07	\N	CÁI/CÁI	1
12	TÚI NYLON MỎNG 50*61	NYLON50*61	KG	2023-11-09 06:59:48	2023-11-09 07:07:40	\N	CÁI/KG	26
13	TÚI NYLON MỎNG 55*88	NYLON55*88	KG	2023-11-09 07:00:17	2023-11-09 07:07:40	\N	CÁI/KG	26
14	TÚI NYLON MỎNG 56*68	NYLON56*68	KG	2023-11-09 07:01:25	2023-11-09 07:07:40	\N	CÁI/KG	26
15	NHÃN SHIELDTECH 10	NHAN10	CÁI	2023-11-09 07:10:04	2023-11-09 07:10:04	\N	CÁI/CÁI	1
1	VẢI KHÔNG DỆT MÀU TRẮNG 25 GSM KHỔ 160cm	VKD25W160	KG	2023-10-28 16:51:21	2023-11-09 07:24:29	\N	m/KG	25
2	VẢI KHÔNG DỆT MÀU NAVY 25 GSM KHỔ 160cm	VKD25N160	KG	2023-11-06 18:23:57	2023-11-09 07:24:29	\N	m/KG	25
3	VẢI KHÔNG DỆT MÀU TRẮNG 55 GSM KHỔ 160cm	VKD55W160	KG	2023-11-06 18:24:38	2023-11-09 07:24:29	\N	m/KG	11.3
4	THUN TRẮNG 4LY	THUN4L	KG	2023-11-07 05:11:48	2023-11-09 07:24:29	\N	m/KG	438
5	CHỈ TƠ TRẮNG 150/48	CW150/48	KG	2023-11-07 05:12:28	2023-11-09 07:24:29	\N	m/KG	60000
28	THÙNG CARTON 53*50	CARTON5350	CÁI	2023-11-16 03:32:59	2023-11-16 03:36:07	\N	CÁI/CÁI	1
29	THÙNG CARTON 72*60	CARTON7260	CÁI	2023-11-16 03:33:24	2023-11-16 03:36:07	\N	CÁI/CÁI	1
11	TÚI NYLON MỎNG 56*88	NYLON56*88	KG	2023-11-09 06:59:08	2023-11-16 03:36:07	\N	CÁI/KG	26
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.migrations (id, migration, batch) FROM stdin;
7	2019_12_14_000001_create_personal_access_tokens_table	1
8	2023_10_05_155124_create_companies_table	1
9	2023_10_05_155739_create_boards_table	1
10	2023_10_05_160124_create_roles_table	1
11	2023_10_05_160413_create_permissions_table	1
12	2023_10_05_165906_create_users_table	1
13	2023_10_07_162908_add_col_email_into_users_tables	1
14	2023_10_08_085058_config_col_status_work_into_users_table	1
15	2023_10_08_085653_add_col_company_i_d_into_users_table	1
16	2023_10_09_023558_add_col_stk_and_bank_and_is_rent_moto_into_users_table	1
17	2023_10_09_092209_add_col_phone_number_into_users_table	2
18	2023_10_10_183749_add_pass_init_into_users_table	3
19	2023_10_12_160617_create_products_table	4
20	2023_10_12_161616_create_product_steps_table	4
21	2023_10_14_153604_create_work_quantities_table	4
22	2023_10_20_181222_create_w_devices_table	5
23	2023_10_20_181453_create_w_tools_table	5
24	2023_10_20_181534_create_w_materials_table	5
25	2023_10_20_181620_create_w_semi_products_table	5
26	2023_10_26_173251_materials	6
27	2023_10_26_173557_supplier	6
28	2023_10_27_172751_alert_col_into_wmaterials_table	6
29	2023_10_30_114737_create_customers_table	7
30	2023_10_30_114818_create_partners_table	7
31	2023_10_30_162431_alert_cols_into_suplliers_2	7
32	2023_10_31_032719_alert_col_tax_into_tables	7
33	2023_10_31_085953_alert_col_phone_number_into_supplliers_tables	7
34	2023_11_05_015056_create_orders_table	8
35	2023_11_05_180509_add_cols_into_w_materials_table_part_1	8
36	2023_11_07_155913_alert_cols_into_material_part5	9
37	2023_11_07_174933_add_col_loss_into_orders_table	9
38	2023_11_07_180634_add_col_deleted_at_into_orders_table	9
39	2023_11_09_022024_change_type_col_into_w_materials_table	10
40	2023_11_12_164956_create_user_salaries_table	11
\.


--
-- Data for Name: orders; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.orders (id, name, code, detail_product, user_ids, device_ids, tool_ids, start_at, end_at, created_at, updated_at, loss, deleted_at) FROM stdin;
1	P1625031	139	[{"id": "4", "amount": "21000"}, {"id": "5", "amount": "81875"}]	\N	\N	\N	2023-11-03 00:00:00	2023-12-08 00:00:00	2023-11-08 16:56:05	2023-11-17 16:44:54	5%	\N
\.


--
-- Data for Name: partners; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.partners (id, name, code, address, email, postcode, phone_number, nation, type_supply, created_at, updated_at, deleted_at, tax) FROM stdin;
1	CÔNG TY GIA CÔNG 123	01	ádasdasdasd	áccs	ádasdasd	0919463777	\N	\N	2023-11-01 04:50:30	2023-11-01 04:50:30	\N	12 ấccc
\.


--
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.permissions (id, name, created_at, updated_at, deleted_at) FROM stdin;
1	CREATE	\N	\N	\N
2	UPDATE	\N	\N	\N
3	VIEW	\N	\N	\N
4	DELETE	\N	\N	\N
\.


--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: product_steps; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.product_steps (id, name, description, "time", coefficient, unit_price, product_id, user_ids, start_at, end_at, created_at, updated_at) FROM stdin;
2	VẮT SỔ SÓNG MŨ ÁO PHẢN QUANG	\N	\N	0	590	2	["19"]	\N	\N	\N	2023-10-14 23:14:23
3	MAY PHẢN QUANG THÂN TRÁI HOÀN CHỈNH *2	\N	\N	0	590	2	["27"]	\N	\N	\N	2023-10-14 23:14:31
4	VẮT SỔ NÁCH ÁO PHẢN QUANG	\N	\N	0	590	2	["11"]	\N	\N	\N	2023-10-14 23:14:38
5	VẮT SỔ TRA MŨ VÀO THÂN+NHÃN	\N	\N	0	590	2	["19"]	\N	\N	\N	2023-10-14 23:14:46
6	VẮT SỔ VAI TAY ÁO PHẢN QUANG	\N	\N	0	590	2	["27"]	\N	\N	\N	2023-10-14 23:14:52
7	MAY PHẢN QUANG THÂN SAU HOÀN CHỈNH*3	\N	\N	0	590	2	["16"]	\N	\N	\N	2023-10-14 23:14:58
8	TRA DÂY KÉO HOÀN CHỈNH+KHOÁ NẸP NGANG	\N	\N	0	590	2	["48"]	\N	\N	\N	2023-10-14 23:15:07
9	NỐI BỤNG TRƯỚC	\N	\N	0	590	2	["49"]	\N	\N	\N	2023-10-14 23:15:15
10	VẮT SỔ THUN CHÂN ÁO PHẢN QUANG	\N	\N	0	590	2	["9"]	\N	\N	\N	2023-10-14 23:15:27
11	VẮT SỔ NẸP VÀO THÂN	\N	\N	0	590	2	["49"]	\N	\N	\N	2023-10-14 23:15:33
12	VẮT SỔ THUN MŨ ÁO PHẢN QUANG	\N	\N	0	590	2	["19"]	\N	\N	\N	2023-10-14 23:15:39
13	VẮT SỔ THUN TAY ÁO PHẢN QUANG	\N	\N	0	590	2	["27"]	\N	\N	\N	2023-10-14 23:16:55
14	VẮT SỔ BỤNG(ĐÁY) SAU+GIÀNG TRONG+BỤNG(ĐÁY) TRƯỚC	\N	\N	0	590	2	["11"]	\N	\N	\N	2023-10-14 23:17:03
15	LƯỢT NẸP CHE	\N	\N	0	590	2	["34"]	\N	\N	\N	2023-10-14 23:17:08
16	VẮT SỔ EO + VẮT SỔ DÂY PHẢN QUANG TRƯỚC	\N	\N	0	590	2	["20"]	\N	\N	\N	2023-10-14 23:17:14
17	MÍ PHẢN QUANG VÀO NẸP	\N	\N	0	590	2	["33"]	\N	\N	\N	2023-10-14 23:17:19
18	TRA DÂY KÉO HOÀN CHỈNH+KHOÁ NẸP NGANG+NỐI BỤNG TRƯỚC	\N	\N	0	590	2	["37"]	\N	\N	\N	2023-10-14 23:17:32
19	CHẦN 5 LY NẸP CHE	\N	\N	0	590	2	["19"]	\N	\N	\N	2023-10-14 23:17:39
24	VẮT SỔ TAY VÀO THÂN (VẮT SỔ TRA TAY)	\N	\N	1	286	1	["23"]	\N	\N	\N	2023-10-14 23:19:52
27	VẮT SỔ THUN MŨ	\N	\N	1	70	1	["45"]	\N	\N	\N	2023-10-14 23:21:40
28	VẮT SỔ MŨ VÀO THÂN + NHÃN	\N	\N	1	256	1	["26"]	\N	\N	\N	2023-10-14 23:21:56
29	VẮT SỔ GIÀNG TRONG	\N	\N	1	220	1	["34"]	\N	\N	\N	2023-10-14 23:22:24
30	VẮT SỔ TẤT	\N	\N	1	168	1	["30"]	\N	\N	\N	2023-10-14 23:22:41
31	TRA TẤT VÀO THÂN	\N	\N	1	420	1	["20"]	\N	\N	\N	2023-10-14 23:22:59
32	TRA DÂY KÉO HOÀN CHỈNH	\N	\N	1	466	1	["25"]	\N	\N	\N	2023-10-14 23:23:14
33	VẮT SỔ THUN TAY	\N	\N	1	166	1	["19"]	\N	\N	\N	2023-10-14 23:23:38
34	MAY 1 ĐOẠN THÂN TRƯỚC	\N	\N	1	65	1	["17"]	\N	\N	\N	2023-10-14 23:24:04
35	VẮT SỔ SÓNG THÂN SAU + MỘT ĐOẠN THÂN TRƯỚC	\N	\N	1	205	1	["17"]	\N	\N	\N	2023-10-14 23:24:32
23	VẮT SỔ THÂN SAU	\N	\N	1	140	1	["17"]	\N	\N	\N	2023-10-14 23:55:12
1	MAY PHẢN QUANG THÂN PHẢI HOÀN CHỈNH *2	\N	\N	0	590	2	["29", "30", "32"]	\N	\N	\N	2023-10-15 03:33:58
20	GẤP TP	\N	\N	1	150	2	["6", "7", "8", "9", "23"]	\N	\N	\N	2023-10-15 03:53:03
37	MAY 1 ĐOẠN THÂN TRƯỚC	\N	\N	1	100	2	\N	\N	\N	2023-10-16 18:02:54	2023-10-24 07:44:09
25	VẮT SỔ VAI TAY (VẮT SỔ SƯỜN)	\N	\N	1	230	1	["34"]	\N	\N	\N	2023-10-24 07:47:40
36	GẤP THÀNH PHẨM	\N	\N	1	150	1	\N	\N	\N	2023-10-16 18:01:03	2023-10-24 07:50:43
21	LỘN THÀNH PHẨM	\N	\N	1	200	1	["7"]	\N	\N	\N	2023-10-24 07:51:06
22	GẤP+LỘN THÀNH PHẨM	\N	\N	1	350	1	["8"]	\N	\N	\N	2023-10-24 07:51:19
40	Đính 5 điểm	\N	\N	1	150	3	\N	\N	\N	2023-11-03 13:10:02	2023-11-03 13:10:02
41	Gấp Quần Boxer	\N	\N	1	100	3	\N	\N	\N	2023-11-03 13:10:19	2023-11-03 13:10:19
42	Lộn Quần Boxer	\N	\N	1	50	3	\N	\N	\N	2023-11-03 13:10:34	2023-11-03 13:10:34
43	Chế hàng gấp xếp	\N	\N	1	150	1	\N	\N	\N	2023-11-09 06:44:19	2023-11-09 06:44:19
38	Vắt sổ sườn + đáy quần	\N	\N	1	202	3	["30", "34", "45", "49", "47"]	\N	\N	2023-10-21 06:56:43	2023-11-15 05:12:41
39	Vắt sổ lưng quần	\N	\N	1	185	3	["19", "38", "28"]	\N	\N	2023-10-21 06:57:33	2023-11-15 05:12:52
26	VẮT SỔ SÓNG MŨ	\N	\N	1	60	1	["30"]	\N	\N	\N	2023-11-15 05:17:15
\.


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.products (id, creator_id, name, code, description, start_at, end_at, created_at, updated_at, deleted_at, size, part_number, materials) FROM stdin;
2	1	BẢO HỘ PHẢN QUANG LAMINATE	JEF01	\N	\N	\N	2023-10-14 23:12:53	2023-10-14 23:12:53	\N	M	\N	\N
1	1	ÁO BẢO HỘ CƠ BẢN	AR01	\N	\N	\N	2023-10-14 20:57:49	2023-10-14 23:13:22	\N	M	\N	\N
3	56	QUẦN BOXER	AR02	\N	\N	\N	2023-10-21 06:51:29	2023-10-21 07:10:11	\N	M	\N	\N
4	1	ÁO BẢO HỘ CƠ BẢN	AR01	\N	\N	\N	2023-11-08 16:53:04	2023-11-08 16:53:04	\N	3XL	51239	[{"id": "9", "quota": "1"}, {"id": "1", "quota": "2.528"}]
5	1	ÁO BẢO HỘ CƠ BẢN	AR01	\N	\N	\N	2023-11-08 16:53:28	2023-11-08 16:53:28	\N	3XL	51251	[{"id": "2", "quota": "2.528"}]
\.


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.roles (id, name, permissions, created_at, updated_at, deleted_at) FROM stdin;
2	Kế Toán Kho	{"WAREHOUSETOOL": ["1", "2", "3", "4"], "WAREHOUSEDEVICE": ["1", "2", "3", "4"], "WAREHOUSEPRODUCT": ["1", "2", "3", "4"], "WAREHOUSEMATERIAL": ["1", "2", "3", "4"], "WAREHOUSEHAFTPRODUCT": ["1", "2", "3", "4"]}	2023-10-10 15:56:41	2023-10-10 15:56:41	\N
3	Kế Toán Nội Bộ	{"ROLE": ["1", "2", "3", "4"], "USER": ["1", "2", "3", "4"], "BOARD": ["1", "2", "3", "4"], "WAREHOUSETOOL": ["1", "2", "3", "4"], "WAREHOUSEDEVICE": ["1", "2", "3", "4"]}	2023-10-10 15:57:50	2023-10-10 15:57:50	\N
4	Nhân Viên	{"STAFF": ["1", "2", "3", "4"]}	2023-10-11 17:12:02	2023-10-11 17:12:02	\N
1	manager	{"WAREHOUSEPRODUCT": ["1", "2", "3", "4"]}	\N	2023-10-24 07:48:01	\N
\.


--
-- Data for Name: suppliers; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.suppliers (id, name, code, created_at, updated_at, deleted_at, address, tax, type_supply, piority, dept, money_tc, phone_number, postcode, email) FROM stdin;
1	CÔNG TY TNHH VẢI KHÔNG DỆT CÔNG NGHỆ CAO AN PHONG	VKD01	2023-10-28 16:50:18	2023-11-08 04:35:48	\N	Xưởng 16, Lô số 15-17-19 Đường số 5, KCN Tân Đức , Xã Đức Hòa Hạ, Huyện Đức Hoà, Tỉnh Long An	1101954452	Vải	\N	\N	\N	0708192678	1101954452	info@anphongnon-woven.com
2	CÔNG TY XYZ	2	2023-10-28 16:50:33	2023-11-08 04:35:52	2023-11-08 04:35:52	\N	\N	\N	\N	\N	\N	\N	\N	\N
3	CÔNG TY TNHH MTV XUẤT NHẬP KHẨU PHƯƠNG NAM	VKD02	2023-11-08 04:40:41	2023-11-08 04:40:41	\N	Số 262, Khối 06, Đường Phai Vệ, P. Đông Kinh, TP. Lạng Sơn, T. Lạng Sơn	4900764527	Vải	\N	\N	\N	0325924456	4900764527	sales02@greenlifepackagings.com
4	CÔNG TY CỔ PHẦN THƯƠNG MAI DỊCH VỤ HIỆP THÀNH PHÁT	NYLONDN	2023-11-09 06:49:35	2023-11-09 06:49:35	\N	02 Bình Thái 3, Phường Hoà Thọ Đông, Quận Cẩm Lệ, Thành Phố Đà Nẵng, Việt Nam	0401279415	Thùng Carton	\N	\N	\N	0935159995	2007201001153 - AGRIBANK	Linh@hiepthanhphat.com
5	CÔNG TY CỔ PHẦN SẢN XUẤT THƯƠNG MẠI DỊCH VỤ PRINTTECH BARCODE	DECAL	2023-11-09 06:53:47	2023-11-09 06:53:47	\N	324 đường Nguyễn Thị Lắng, Ấp 1, Xã Phước Vĩnh An, Huyện Củ Chi, TP.HCM	0315149028	Nhãn Mác	\N	\N	\N	02862873509	060185924079 - SACOMBANK	info@printtech.com.vn
6	CÔNG TY CỔ PHẦN IN CÔNG THÀNH	TEM	2023-11-09 06:58:01	2023-11-09 06:58:01	\N	302 Hải Phòng, Phường Tân Chính, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam	0401515888	Nhãn Mác	\N	\N	\N	0905034034	2505 1000 515 8888 Ngân hàng Liên doanh Việt Nga	incongthanhdanang@gmail.com
7	CÔNG TY TNHH MTV PHAN GIA CƯỜNG	BANGKEO	2023-11-09 07:00:29	2023-11-09 07:01:02	\N	Đường số 6, KCN Hòa Khánh, Phường Hoà Khánh Bắc, Quận Liên Chiểu, Thành phố Đà Nẵng, Việt Nam	0401457121	Phụ Liệu May	\N	\N	\N	0389913805	0401457121	phangiacuong@gmail.com
8	CHI NHÁNH CÔNG TY TNHH BAO BÌ TQT TẠI THÀNH PHỐ HỒ CHÍ MINH	CARTON	2023-11-09 07:06:32	2023-11-09 07:06:32	\N	390/7 Lê Trọng Tấn, Phường Tây Thạnh, Quận Tân Phú, Tp Hồ Chí Minh, Việt Nam	0901017633-002	Thùng Carton	\N	\N	\N	0866 116 345	0866 116 345	Ly@tqt
9	CÔNG TY TNHH JIUDA VIỆT NAM	THUN	2023-11-09 07:09:13	2023-11-09 07:09:13	\N	Thửa đất 1161, 1162 tờ số 30 đường Tân Hiệp 20, Khu Phố Tân Phú, Phường Tân Hiệp, Thị xã Tân Uyên, Tỉnh Bình Dương, Việt Nam	3703068871	Phụ Liệu May	\N	\N	\N	3703068871	1032116177 - VIETCOMBANK	3703068871
10	CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ XUẤT NHẬP KHẨU NAM PHÚ THỊNH	CHITO	2023-11-09 07:12:23	2023-11-09 07:12:23	\N	3/306HI, Ấp Nam Thới, Xã Thới Tam Thôn, Huyện Hóc Môn, Thành phố Hồ Chí Minh, Việt Nam	0317840689	Phụ Liệu May	\N	\N	\N	0317840689	0317840689	Thái Hiền
11	TRỢ NHỎ	CHICOTTON	2023-11-09 07:28:23	2023-11-09 07:28:23	\N	113 Hoàng Hoa Thám	0935501501	Phụ Liệu May	\N	\N	\N	0935501501	189442639 - ACB	Tronho
\.


--
-- Data for Name: user_salaries; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.user_salaries (id, user_id, work_day, permitted_day_off, not_allowed_day_off, overtime, late, early, support_money, advance, sum, start_at, end_at, created_at, updated_at, deleted_at) FROM stdin;
1	3	29.5	0	0	26.67	0	0	                         -  	0	7424400	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
2	4	12	0	0	10	0	0	200000	0	2099671	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
3	5	11	17	0	9.67	0	0	80000	0	2354941	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
4	6	28.5	0	0	0	0	0	                         -  	0	6116512	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
5	7	28.5	0	0	0	1.416667	0	                         -  	0	6116662	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
6	8	28	0	0	0	0.333333	0	                         -  	0	4774242	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
7	9	20	2	0	0	0	0	80000	0	3908750	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
8	10	27	0	0	0	0	0	                         -  	0	4638546	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
9	13	28	1	0	13.67	0.333333	0	                         -  	0	5669454	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
10	14	30	0	0	16	0	0	                         -  	0	6317738	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
11	15	28	0	0	8	0	0	                         -  	0	5573575	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
20	24	26.5	0	0	0	0	0	                         -  	0	8576144	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
21	25	27	0	0	0	0	0	                         -  	0	11029097	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
22	26	26.5	0	0	0	0	0	                         -  	0	7589974	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
23	27	26	0	0	0	0	0	                         -  	0	6262338	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
24	28	10	16	0	0	0	0	320000	0	2886472	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
25	29	28	0	0	0	0.5	0	                         -  	0	5767286	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
26	30	28	0	0	0	0.833333	0	                         -  	0	6938490	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
27	31	25	0	0	0	0	0	                         -  	0	5993100	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
28	32	27	0	0	0	0	0	                         -  	0	4882851	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
29	33	28	0	0	0	0	0	                         -  	0	5767286	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
30	34	26	0	0	0	0	2	                         -  	0	7510038	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
31	35	26	0	0	0	0	0	                         -  	0	5922477	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
32	37	28	0	0	0	0	0	                         -  	0	5767286	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
33	38	25	0	1	0	0	0	100000	0	4303840	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
35	40	14	0	0	0	0	0	                         -  	0	2648257	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
38	43	27	0	0	0	0	0	                         -  	0	5327197	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
40	45	22.5	1.5	0	0	0.666667	0	                         -  	0	2987302	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
69	86	10	0	0	10	0	0	                         -  	0	1680094	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-17 04:20:18	2023-11-17 04:23:06	\N
34	39	=VLOOKUP(B35,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B35,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B35,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B35,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
36	41	=VLOOKUP(B37,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B37,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B37,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B37,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
37	42	=VLOOKUP(B38,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B38,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B38,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B38,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
39	44	=VLOOKUP(B40,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B40,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B40,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B40,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
68	0	0	0	0	0	0	0	0	0	0	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:27:21	\N
50	55	=VLOOKUP(B51,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B51,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B51,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B51,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
64	70	=VLOOKUP(B65,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B65,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B65,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B65,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
65	71	=VLOOKUP(B66,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B66,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B66,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B66,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
41	46	27	0	0	0	0	0	                         -  	0	5697269	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
42	47	26	0	1	0	0	0	                         -  	0	2766538	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
43	48	25	0	0	0	0	0	                         -  	0	2806018	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
44	49	26	0	0	0	1.25	0	                         -  	0	3762734	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
45	50	4.5	0	0	0	0	0	                         -  	0	#N/A	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
46	51	26	0	0	12	0	0	                         -  	0	5198824	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
47	52	26.5	0.5	0	17	0	0	                         -  	0	5515192	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
48	53	13	2	2	0	0	0	                         -  	0	2340000	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
49	54	13	3	0	0	0	0	                         -  	0	2340000	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
51	56	19	0	0	7	0	0	120000	0	4654480	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
52	57	19	0	0	7	0	0	220000	0	4754480	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
53	58	26	0	0	0	0	0	                         -  	0	7788032	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
66	72	14.5	0	0	0	0.283333	0	                         -  	0	2710051	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
67	73	13	0	0	2	0	0	                         -  	0	2402721	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
12	16	26.5	0.5	0	6	0	0	                         -  	0	5388066	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
13	17	26	0	0	0	0	0	                         -  	0	3629100	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
14	18	27	0	0	0	1.25	0	                         -  	1000000	6581825	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
15	19	26	0	0	0	0	0	                         -  	0	10158576	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
16	20	27	0	0	0	0	0	                         -  	0	11610917	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
17	21	26.5	0	0	0	0	0	                         -  	0	9419744	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
18	22	27	0	0	0	0	0	                         -  	0	7783937	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
19	23	28	0	0	0	0	0	                         -  	0	9213936	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
54	59	10	0	0	0	0	0	                         -  	0	1767212	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
55	61	16.5	0	0	0	0	0	                         -  	0	2105196	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
56	62	11.5	0.5	1	0	0.333333	0	                         -  	0	1061950	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
57	63	12	0	1	0	0.333333	0	                         -  	0	1079400	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
58	64	17.5	0	0	0	0	0	                         -  	0	2267881	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
60	66	13.5	0	0	3	0	0	                         -  	0	2598167	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-17 04:23:06	\N
59	65	=VLOOKUP(B60,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B60,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B60,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B60,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
61	67	=VLOOKUP(B62,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B62,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B62,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B62,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
62	68	=VLOOKUP(B63,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B63,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B63,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B63,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
63	69	=VLOOKUP(B64,Sheet1!$B$4:$O$59,4,FALSE)	0	0	=VLOOKUP(B64,Sheet2!$B$6:$C$61,2,FALSE)	0	0	=VLOOKUP(B64,Sheet1!$B$4:$R$59,8,FALSE)	0	=VLOOKUP(B64,Sheet1!$B$4:$R$59,14,FALSE)	2023-10-01 00:00:00	2023-10-31 00:00:00	2023-11-15 10:27:21	2023-11-15 10:50:20	\N
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.users (id, full_name, cccd, birthday, phone_number, login_id, password, is_super_admin, remember_token, role_id, board_id, begin_work, created_at, updated_at, deleted_at, email, status_work, company_id, stk, bank, title_level, is_rent_moto, amount_month, pass_init, first_login) FROM stdin;
1	manager one	00000000000	\N	\N	manager_one	$2y$10$s8benkPUfuZmUurJAZZUK.ZyiCd2IVDm7AaCCtQTITmW2MbeoPtBO	f	\N	1	\N	\N	2023-10-09 04:14:26	2023-10-09 04:14:26	\N	\N	1	\N	\N	\N	Tổng quản lý	1	\N	\N	\N
3	Nguyễn Tiến	\N	\N	\N	86883	$2y$10$orO78Cewq1LwCs8pV9NueujruO24Xe.wDrD8g0gfPlq0kMfRUIh4O	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	105874043112	Viettinbank	ĐÓNG GÓI	1	\N	209609	\N
4	Trần Xuân Vũ	\N	\N	\N	86884	$2y$10$os4.MavR7Mj9GmJYJ0rGou0gSf2ukrRrulC3dMXXc4lSgQOcACWgS	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0399414409	MBBank	ĐÓNG GÓI	1	\N	346336	\N
5	Lê Thi Thương	\N	\N	\N	86885	$2y$10$rsX78yWcFrpVjxOBoiwmKuXrbWGMGA5kTrSAlAmvClAKNR7S8thd.	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N				1	\N	148271	\N
6	Nguyễn Thị Thu 2	\N	\N	\N	86886	$2y$10$JLaS4uziyFsj80MJrX2qr.8HccVxPUj4XFED42g7Zh2ZclosEkeLa	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0796791006	Eximbank	GẤP XẾP	1	\N	966618	\N
7	Nguyễn Thị Nga	\N	\N	\N	86887	$2y$10$j5oU0KryME7LS3pqJOwjM.dFRVFy1b.2ZRT6I197x0dqQw7FcZ2SK	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0796791006	Eximbank	GẤP XẾP	1	\N	398759	\N
8	Nguyễn Thị Thu 3	\N	\N	\N	86888	$2y$10$blWlmaHJX58k7s7l.Fpl8.6isP4nsDY7iO6YZPjNfoYsBewmrUK/q	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0796791006	Eximbank	GẤP XẾP	1	\N	520152	\N
9	Đỗ Thị Phương Thuỷ	\N	\N	\N	86889	$2y$10$7DBF8nM4HnqD1xU5z8HLj.H3FE4pQSU0.X0CklAUGlisfJi/90Equ	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	105871686897	Viettinbank	GẤP XẾP	1	\N	611822	\N
12	Đặng Thị Vân	\N	\N	\N	868812	$2y$10$XDNko0ZTr2vCGoxWiVyqFeMPyZA8rfCpE0rzHzy7kahQHxV2LaTTS	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-11-14 14:55:30	2023-11-14 14:55:30	\N	1	\N			GẤP XẾP	1	\N	485927	\N
14	Nguyễn Thị Hiền	\N	\N	\N	868814	$2y$10$O.o6vn.LsztTUflI95AVsu4s5r11424KkfUEPcQnrBq5TWBdZC7fK	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	106876629570	Vietinbank	KIỂM HÀNG	1	\N	865389	\N
16	Lê Thị Phương Thảo	\N	\N	\N	868816	$2y$10$.eOp/JqyziDhdVxZkuDpR.Hu1eIWjBUknoq2e/A9TNvsev6hNNJGq	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0796791006	Eximbank	TỔ TRƯỞNG	1	\N	108308	\N
17	Võ Thị Dung	\N	\N	\N	868817	$2y$10$Hje12NV/Sra/3agFBuNQy.4OA4Uq0Vpn0aTvNgXdu6g/5V.8SgfE6	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	19035790234013	Techcombank	CÔNG NHÂN MAY	1	\N	259567	\N
19	Dương Thị Ngọc Lan	\N	\N	\N	868819	$2y$10$w9ceptU4A8HMLcinSxY/TehZ9xE.wo75eOpw0rJiSZwjAPnOLe52W	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	19038530435014	Techcombank	CÔNG NHÂN MAY	1	\N	785833	\N
21	Dương Thị Vi	\N	\N	\N	868821	$2y$10$/LfKlGQXWUd4.aIJt1wjzuZm8JvyIvhoVeRet2oeHUN67qApZORii	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	4202205211283	Agribank	CÔNG NHÂN MAY	1	\N	847965	\N
22	Nguyễn Thị Tuyết Xưng	\N	\N	\N	868822	$2y$10$ohMkNroUiW38tb.94bMO.ucQa8ad/2GIrVTdg0RhTcs.3XNcvAwoW	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000880075	Vietcombank	CÔNG NHÂN MAY	1	\N	673444	\N
24	Tống Thị Thúy	\N	\N	\N	868824	$2y$10$1Ba4iMPsL5GmRh9mRHxKd.gXQobwgWySyYQZtyb598K/PGsIAokdi	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000847885	Vietcombank	CÔNG NHÂN MAY	1	\N	641762	\N
26	Dương Thị Yến	\N	\N	\N	868826	$2y$10$WNo64MjcbK7/j2XlS4VR.ucZU6uhgF0BqvAR39iKTukrNE9FIBc5q	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848095	Vietcombank	CÔNG NHÂN MAY	1	\N	674415	\N
27	Thái Thị Hồng Vân	\N	\N	\N	868827	$2y$10$KHy89Pp8ip85LwpTNe2xJ.KqOaPfPflmOwM/FYHcI1bsH2mSz9Ppq	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000847804	Vietcombank	CÔNG NHÂN MAY	1	\N	142612	\N
29	Hà Thị Bích	\N	\N	\N	868829	$2y$10$MKh7ZMlNGkuJxK8zdC.cL.XAZxqsrXdBjth5aJ.tgP2Dq.sCuDknK	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	1023710734	Vietcombank	CÔNG NHÂN MAY	1	\N	841915	\N
30	Lê Thị Hồng Lài	\N	\N	\N	868830	$2y$10$5jg5XUfyQhErkGffHX08pee3gr6irgsiTLvEUxJZOt6vTSWkUdaLO	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	19038572219011	Nguyễn Thị Thuỳ	CÔNG NHÂN MAY	1	\N	752270	\N
32	Lê thị Tâm Như	\N	\N	\N	868832	$2y$10$96GPuL2cwNHJMoRO7debm.b.3W1BTIGQDGBb4bWM3KU.CqtwZTYYe	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0834076049	MBBank	CÔNG NHÂN MAY	1	\N	453310	\N
34	Võ Thị Hân	\N	\N	\N	868834	$2y$10$X2otEJK1diYUS8aULqIpluSlTR9ALm8OOGVjULJ8dnwzvhH.98P6y	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000884571	Vietcombank	CÔNG NHÂN MAY	1	\N	835094	\N
35	Hà Thị Phương Dung	\N	\N	\N	868835	$2y$10$Osd1zVAp1/7Fq//XXTze0.fGHnTYo/TA1OCR6EY/PHqN6oEZUkALS	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848936	Vietcombank	CÔNG NHÂN MAY	1	\N	227369	\N
37	Hà Thị Bích	\N	\N	\N	868837	$2y$10$qzkvofaO49MlsYzMQw/YZ.98D4nU/KwztL0tq2Q/1lWXCwjjEGLAq	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	1023710734	Vietcombank	CÔNG NHÂN MAY	1	\N	577335	\N
38	Nguyễn Thị Cúc	\N	\N	\N	868838	$2y$10$Yywq8hlDiVroxuYu9VyQTucxCgorrE87FzP6FaOArhLoTT.h1TYOy	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848915	Vietcombank	CÔNG NHÂN MAY	1	\N	228459	\N
40	Nguyễn Thị Nhật Trinh	\N	\N	\N	868840	$2y$10$1EP84hZiRULsFX5tHPaW8.wC9sbAKvYd7xMe.X3YcIDy7kc3w8tAu	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000854364	Vietcombank	CÔNG NHÂN MAY	1	\N	608511	\N
42	Trần Thị Song	\N	\N	\N	868842	$2y$10$PbBPHd/jvJxUJkbfN8IquOdVC/80uVg2PijBbZ1ok4AmcZpXq6D.K	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0934310990	MBBank	CÔNG NHÂN MAY	1	\N	355865	\N
43	Phan Thị Trinh	\N	\N	\N	868843	$2y$10$3cXW.4pFaic4BvJ0satT/.FOIAjYoGq.ByzdN6Wf4TznYsFa6W0EW	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0365860532	MBBank	CÔNG NHÂN MAY	1	\N	289845	\N
45	Nguyễn Thị Trang	\N	\N	\N	868845	$2y$10$kIvUP1GVAllOiKYyHA95Xup1QvUH6Tzs2bhMOlO9Wd.AoD4Ey5LeK	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0905719441	MBBank	CÔNG NHÂN MAY	1	\N	253097	\N
46	Trương Thị Huệ	\N	\N	\N	868846	$2y$10$1PgNyapuz/Ei6Y9FmC0KcehBpT2Cl7zcs/W.7Tn.0R/wHCfwrCdO.	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848960	Vietcombank	CÔNG NHÂN MAY	1	\N	427172	\N
48	Huỳnh Thị Kim Sa	\N	\N	\N	868848	$2y$10$gG7YWsPm7/cAp8z/kXjFTeO.9AzQW1VG.u96Vvi7SV0A4IwxfelfK	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N			CÔNG NHÂN MAY	1	\N	987863	\N
49	Trần Thị Cảnh	\N	\N	\N	868849	$2y$10$KiwDKYTgxrbt..L2wGiUO.ttQfRMBLG428Ea7pXVa5Xe4X7Wi4y.G	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N			CÔNG NHÂN MAY	1	\N	148662	\N
51	Nguyễn Chí Quang	\N	\N	\N	868851	$2y$10$6u36NqDeq5rJesF583rtxeoBG0ob46xDlT0wdooxaWr2pncvX00Y2	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N			ĐÓNG GÓI	1	\N	182822	\N
53	Lê Văn Linh	\N	\N	\N	868853	$2y$10$8IMCN9WQhq6gIk5MB0sW8OCsXyIvnYUsw2JEYCFDs5H.qWn3LLCzy	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N			ĐÓNG GÓI	1	\N	147526	\N
2	Dương Quý Việt	\N	\N	\N	86882	$2y$10$eW/jDKmopm5Bjyc.NS/PEunbwnXu6QSNalG8CINf2txKlVVO.K68C	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-11-14 14:55:05	2023-11-14 14:55:05	\N	1	\N	105006059179	Viettinbank	CƠ ĐIỆN	1	\N	236394	\N
11	Đặng Thị Vân	\N	\N	\N	868811	$2y$10$fWJC.TbswvM57XdCYRS05.zcucsm.wb6N1vrGHlumATBeyXv1QAiC	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-11-14 14:55:27	2023-11-14 14:55:27	\N	1	\N			GẤP XẾP	1	\N	949844	\N
44	Trương Thị Xuân	\N	\N	\N	868844	$2y$10$JOe3Fr6cr23lvxvD7qbTCe1LkeLVExpYr/b2XhHLfU4m5nIdJ7/Wa	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0211000488692	Vietcombank	CÔNG NHÂN MAY	1	\N	344575	\N
56	Lê Thị Uyên Thư	049301004196	2001-09-14 00:00:00	0795261160	uyenthult	$2y$10$n4kW2S3LPJ7l1r0U30QWE.3LRnI88gFBZJ8oAwPsm9dg7XcYKsx5G	t	\N	3	3	2023-10-19 00:00:00	2023-10-21 07:03:21	2023-10-24 07:42:09	\N	uyenthu4901@gmail.com	1	1	1013355598	Vietcombank	Kế Toán	1	22624	441277	\N
57	Hà Phước Kiều	049301006794	2001-08-09 00:00:00	0795710514	phuockieuha	$2y$10$D7of9MNDftHqyH9DdEF28.9kMM29YYO5WV6m5gA6zf51vvmWKM1Mi	t	\N	3	3	2023-10-09 00:00:00	2023-10-21 07:08:10	2023-10-24 07:42:16	\N	hakieu662@gmail.com	1	1	0867827224	MBBANK	Kế Toán	1	22624	269315	\N
10	Phạm Thị Liên	\N	\N	\N	868810	$2y$10$2bk4dp0IcK7vtNKD7SJ8reD3dSixdSvImBT9.GpAX/TM.Cc7tzBeC	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000847822	Vietcombank	GẤP XẾP	1	\N	366832	\N
13	Nguyễn Thị Mỹ Linh	\N	\N	\N	868813	$2y$10$ZpjcpdXBlSLqtix2T0hmH.yv1Qn48gFE3K3qZx7RSgPgXSVbXY92.	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	106876629570	Vietinbank	KIỂM HÀNG	1	\N	310604	\N
15	Lê Thị Hết	\N	\N	\N	868815	$2y$10$au8WUJcnyowpWLepZMPY5uJHJMMv7dUS1y6EPKJH1nlWz.UuxDKwW	f	\N	\N	3	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	15986787	ACB	TẠP VỤ	1	\N	109182	\N
18	Đoàn Thị Thanh Ngân	\N	\N	\N	868818	$2y$10$Fu5Wj1OOB3N/P5M1bCjsLercBwKAg434H1NBy0iBlvZp8NABQIv06	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848636	Vietcombank	CÔNG NHÂN MAY	1	\N	597250	\N
20	Trần Thị Bình	\N	\N	\N	868820	$2y$10$YD4Elzy.l1sk4Lu8BnhMhe3EJgZOxYQ8dScVfe.Feu/D1yZjYyCN2	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848022	Vietcombank	CÔNG NHÂN MAY	1	\N	928894	\N
23	Lê Thị Liên	\N	\N	\N	868823	$2y$10$4DD5/1RJDCahzMv0z1PsF.ZDBjeOZSxjY48WJ/IczUCEkPx0B/kN6	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848696	Vietcombank	CÔNG NHÂN MAY	1	\N	574863	\N
25	Nguyễn Thị Huyền Trang	\N	\N	\N	868825	$2y$10$rNGJZdP7ZMoUWMBbXiXj3.dUQbvOqQrFhdKIMdLLOdVvyJUL1R6mS	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848637	Vietcombank	CÔNG NHÂN MAY	1	\N	652234	\N
28	Đoàn Thị Thơm	\N	\N	\N	868828	$2y$10$RokoJO9a6K.HljskmHkpYet/cdt.ZGqaRABhMqhqy2NjUlAcR1yY6	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848147	Vietcombank	CÔNG NHÂN MAY	1	\N	756863	\N
31	Nguyễn Thị Thuỳ	\N	\N	\N	868831	$2y$10$he1.9RX86jmnhzAc3/24K.0joXpC9lniIaj/aKgpE1DlN619fRxw2	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000848432	Vietcombank	CÔNG NHÂN MAY	1	\N	129544	\N
33	Hà Thị Bích	\N	\N	\N	868833	$2y$10$7QC0MaWDcftzXSzeEeHr1.bxD5sBb4PqNEt325NWjR3Lskl/r9nwS	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	1023710734	Vietcombank	CÔNG NHÂN MAY	1	\N	807887	\N
50	Trương Thị Hồng	\N	\N	\N	868850	$2y$10$T3DE2xAHOxQUiXjUzui/Culpjgrsh2HslwBA1/eHRvMG/Ge9y0hGe	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-11-16 04:20:46	\N	\N	0	\N			GẤP XẾP	1	\N	311883	\N
39	Nguyễn Thị Mỹ Dung	\N	\N	\N	868839	$2y$10$DN15PC/Sffv95m6gDPm.hu7Uv803a/Feb/1mhrWCdjTQYALKgCoY2	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	0651000880075	Vietcombank	CÔNG NHÂN MAY	1	\N	927326	\N
47	Phan Hồ Anh Thư	\N	\N	\N	868847	$2y$10$2nuAM.06k6scSmdptM8x4OCeLmao3FLp3KEi4YJEIwZlaxSFUvsVq	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N	4219205084150	Agribank	CÔNG NHÂN MAY	1	\N	483087	\N
52	Nguyễn Văn Hùng	\N	\N	\N	868852	$2y$10$qjVmiJdP2VjBdDfhUHNeVu5Egw7bcAk1F2/71NiNtgBpAMS6HYd8O	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N			ĐÓNG GÓI	1	\N	121871	\N
54	Lê Văn Hà	\N	\N	\N	868854	$2y$10$TWXos7JhXmt0BmCL2Hga/uTJPmyd.Ev5GT7pyj2usYtRMO4EuI6sm	f	\N	\N	1	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	1	\N			ĐÓNG GÓI	1	\N	959420	\N
58	Tưởng Thị Bích Hạnh	04935551052	1993-05-20 00:00:00	0934871581	tuongthibichhanh	$2y$10$wTzod6IGxN9aQizhTnwefeObmZzU4fR9FJdaSvqxdFZsqhb5pOj5y	f	\N	4	2	2022-01-01 00:00:00	2023-10-25 06:30:21	2023-10-25 06:30:21	\N	ttbhanh@gmail.com	1	1	0651000848641	VIETCOMBANK	CÔNG NHÂN MAY	1	\N	807544	\N
41	Trần Thị Minh Lộc	\N	\N	\N	868841	$2y$10$aN1Fxflqm3rp.WsDv8GTLOkcfTKYpa6F4vsYKSGl1/e3p4R1Dr3SW	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-10-17 02:19:15	\N	\N	0	\N	42022051722890	Agribank	CÔNG NHÂN MAY	1	\N	473002	\N
59	Nguyễn Thị Loan Vĩ	049182010607	1982-04-04 00:00:00	0931782906	loanvi	$2y$10$qGrvnYLE0WzqD.gJvsRc..Tx88Wi06xrx.Q1A/DmCyEDG0h4I4Hbm	f	\N	4	1	2023-10-20 00:00:00	2023-11-03 03:49:02	2023-11-03 03:49:02	\N	vi123@gmail.com	1	1	1020546484	vietcombank	Gấp xếp	1	\N	884028	\N
62	Hồ Quỳnh Hương	049306008064	2006-08-12 00:00:00	0768484415	hoquynhhuong	$2y$10$NerIQQajXfXtFWM/bEXCU.M.MFn/.y1ZFMXPDLOLmxrQ/I8ll9eeq	f	\N	4	1	2023-10-20 00:00:00	2023-11-04 02:37:49	2023-11-09 00:37:03	\N	huong@gmail.com	1	1	0768484415	MBBANK	Gấp xếp	1	theo sản phẩm	912124	\N
64	Lê Thị Á	049169008866	1976-01-01 00:00:00	0768691034	lethia	$2y$10$wfNPNM30Zct3EUezTOZF4OgK6ti.YBCpixY2P0aoxEy6VCOzdbH5q	f	\N	4	1	2023-10-13 00:00:00	2023-11-09 01:20:03	2023-11-09 01:20:03	\N	lethia123@gmail.com	1	1	0768691034	EXIMBANK	GẤP XẾP	1	theo sản phẩm	832593	\N
61	Nguyễn Thị Cẩm Nhung	049176012909	1976-11-12 00:00:00	0388165551	camnhung	$2y$10$nakaLd1kPpK1AjFwx/8gaeHrVcGO7aUzJqVPY9A6od5bJzU6Jzp7.	f	\N	4	1	2023-10-13 00:00:00	2023-11-04 02:26:42	2023-11-06 09:50:14	\N	nhung@gmail.com	1	1	1023737043	vietcombank	gấp xếp	1	theo sản phẩm	108693	\N
60	Ngô Thị Tú Uyên	049306007136	2006-10-09 00:00:00	0362420647	tuuyen	$2y$10$DXSBsVyh5t204fBoesGJFev6hSFdQnuRaStzoU7Q.slEEIOAAQgyu	f	\N	4	1	2023-10-17 00:00:00	2023-11-04 02:23:35	2023-11-07 03:56:11	2023-11-07 03:56:11	uyen12@gmail.com	1	1	0362420647	MBBANK	Gấp xếp	1	\N	227625	\N
55	Trần Thị Phương Hoa	183642422	1988-09-13 00:00:00	0919463777	hoattp	$2y$10$VL8uPvV..gfe9xEIpWloL.ymsmbV6/vCEc73fFbO8aH2EDXwvbUUq	t	\N	3	3	2020-02-28 00:00:00	2023-10-11 16:44:01	2023-11-07 08:17:01	\N	hoattp@8688.vn	1	1	0919463777	VPBank	Giám đốc	1	100000	123123	\N
63	Ngô Thị Tú Uyên	049306007137	2006-10-09 00:00:00	0867827225	ngottuyen	$2y$10$6Q0Sw0jkupFjWV4YO60wDu8Z4tM1AntujFPoWnhcOBmvqi1yh/JU6	t	\N	4	1	2023-10-17 00:00:00	2023-11-07 04:01:10	2023-11-08 03:25:23	\N	uyen123@gmail.com	1	1	0362420647	MBBank	CÔNG NHÂN MAY	1	0	730339	\N
66	Trần Thị Huệ	00000000	1976-10-07 00:00:00	0789087406	tranthihue	$2y$10$sS8xpiCHl5wbINseCe8gnef.1xaYILEBwd5Jh1/rlD2GVcczFbw9G	f	\N	4	2	2023-11-13 00:00:00	2023-11-09 09:08:31	2023-11-09 09:08:31	\N	hue@gmail.com	1	1	040070173893	Sacombank	Gấp xếp	1	theo sản phẩm	895832	\N
67	Trần Thị Gia Hưng	048199000913	1999-03-13 00:00:00	0984819523	giahung	$2y$10$lN5ldUzwxrRZV4o0vx70fedgZmDTZN7vTX6MHHAXIStu4cZ9T10ZS	f	\N	4	2	2023-11-07 00:00:00	2023-11-09 09:22:35	2023-11-09 09:22:35	\N	giahung@gmail.com	1	1	105876913599	Vietinbank	Công nhân may	1	\N	798219	\N
36	Đặng Ngọc Thuý Hiền	\N	\N	\N	868836	$2y$10$JJxiGf8ccCGQy2/AoJSyCe6DTWEL5NQ8UX454Rmjpxp1vlE386Dxa	f	\N	\N	2	\N	2023-10-09 04:14:26	2023-11-14 15:08:06	2023-11-14 15:08:06	\N	1	\N	0972701524	VPBank	CÔNG NHÂN MAY	1	\N	583603	\N
68	Ngô Thị Minh Nhật	049194004353	1994-02-01 00:00:00	0702681296	minhnhat	$2y$10$65Z6m0.2glCBhWkktPXnR.s.NhJTswCpa9wf.PEh5uG2owozxcJDe	f	\N	4	2	2023-11-07 00:00:00	2023-11-10 01:29:41	2023-11-10 01:29:41	\N	minhnhat@gmail.com	1	1	4218205429146	Aribank	Công nhân may	1	\N	293866	\N
65	Đồng Thị Nga	04930213141	2002-07-10 00:00:00	0796788372	dongthinga	$2y$10$OMTup6p5jQfrNv/s2cajGuNBVSUF24NbZwDiiUUctM5DSi/wzxKqm	f	\N	4	2	2023-11-07 00:00:00	2023-11-09 08:58:52	2023-11-10 01:30:23	\N	dongthinga@gmail.com	1	1	100872355229	Vietinbank	Công nhân may	1	theo sản phẩm	339536	\N
69	Trần Thị Đi	049187016363	1987-04-01 00:00:00	0793636299	tranthidi	$2y$10$Onj5B5YHxTWDERMrKpzzVuDL7xtjAOKoevL9yMN1ktOkgggH.tbHy	f	\N	4	2	2023-11-09 00:00:00	2023-11-10 03:10:46	2023-11-10 10:06:19	\N	123456aA@gmail	1	1	102875102873	Vietinbank	Công nhân may	1	theo sản phẩm	105358	\N
70	Nguyễn Thị Kim Vi	048194005610	1994-07-14 00:00:00	0768869342	kimvint	$2y$10$dVcfDnAH.Y3pBDEchgkMB.QXa/0puHBrtYlCnAasg2ki8yzrrinZi	f	\N	4	2	2023-11-07 00:00:00	2023-11-11 01:29:45	2023-11-11 01:29:45	\N	123@gmail.com	1	1	109878103927	Vietinbank	Công nhân may	1	\N	732920	\N
71	Nguyễn Thị Thanh	049193011957	1993-04-02 00:00:00	070786552	ntthanh	$2y$10$l250ktKNYxzZMCXzQLvvp.r3xKrGF/V5cCUPgPuiUHak98bfTJ0dK	f	\N	4	2	2023-11-10 00:00:00	2023-11-14 05:50:20	2023-11-14 05:50:20	\N	ntthanh12345@gmail.com	1	1	106875451053	vietinbank	CÔNG NHÂN MAY	1	theo sản phẩm	993905	\N
72	Nguyễn Đức Quốc Tuấn	04918200000	2002-08-09 00:00:00	0773440235	quoctuan	$2y$10$fxqyZG0JeI53UyimuZiCzu7VB8IoZFnCgwx67a9BsCS.tV1aBSUja	f	\N	4	1	2023-10-13 00:00:00	2023-11-15 09:51:38	2023-11-15 09:53:41	\N	tuan@gmail.com	1	1	9773440235	vietcombank	đóng gói	1	18824	468419	\N
73	Lương Vĩnh Lưu	000000000	1990-04-04 00:00:00	0905126620	vinhluu	$2y$10$vWYKzspnshaMPicL29EQUulgiIItRG2H02Sm6AICNpNFJxvMOExhG	f	\N	4	1	2023-10-13 00:00:00	2023-11-15 09:53:21	2023-11-15 09:54:38	\N	vinhluu@gmail.com	1	1	1019794245	vietcombank	đóng gói	1	18824	307750	\N
74	Nguyễn Thị Thúy Kiều	049055544410	1985-12-13 00:00:00	0779404649	nttkieu	$2y$10$Ds33auyqHMjcLwd3Cw/YZu5NNS1YrkX2UNQLtI02RnpisF9GwGhue	t	\N	2	1	2023-11-08 00:00:00	2023-11-16 02:50:41	2023-11-16 02:50:41	\N	nttkieu123@gmail.com	1	1	0779404649	SHB	Tổ Trưởng	1	lương khoán	220144	\N
75	Nguyễn Thị Thu Hương	049193003003	1993-07-26 00:00:00	0935025942	ntthuong	$2y$10$4vjn/CSM1V/dQUZJOlUQauT6OiJDDwteVHCyJhtIrIupMFNpIGDOG	f	\N	4	2	2023-11-14 00:00:00	2023-11-16 02:54:13	2023-11-16 02:54:13	\N	ntthuong111@gmail.com	1	1	104871793792	vietinbank	CÔNG NHÂN MAY	1	theo sản phẩm	977517	\N
76	Nguyễn Thị Thủy	049391995252	1992-04-10 00:00:00	0702503899	ntthuy	$2y$10$hXL18QmmuZS./is8X/j2bu19LwTRxB4Zvtn8xguxHmkjCDrAh6GRC	f	\N	4	2	2023-11-14 00:00:00	2023-11-16 02:59:02	2023-11-16 02:59:02	\N	ntthuy11@gmail.com	1	1	0905990452	MBBank	CÔNG NHÂN MAY	1	theo sản phẩm	594836	\N
77	Nguyễn Thị Hạnh	048195006491	1995-08-10 00:00:00	0782246047	nthanh	$2y$10$7rJ2d3hJ7n0IQRTDL7CgqO9zJ2FRIpNLoi6RjkpmxYr.2bt/XArsC	f	\N	4	2	2023-11-14 00:00:00	2023-11-16 03:10:45	2023-11-16 03:10:45	\N	nthanh123@gmail.com	1	1	103867989916	vietinbank	CÔNG NHÂN MAY	1	theo sản phẩm	935627	\N
78	Hà Thị Hường	044182010184	1982-07-01 00:00:00	0763797858	hthuong	$2y$10$Yx.yPu6NuY7CxKG85uA5ZusR4Sn9qrXEwhAW.VRivRlazYt7W3zRW	f	\N	4	2	2023-11-14 00:00:00	2023-11-16 03:12:45	2023-11-16 03:12:45	\N	hthuong123@gmail.com	1	1	108873527551	vietinbank	CÔNG NHÂN MAY	1	theo sản phẩm	853647	\N
79	Nguyễn Thị Thu Thúy	049312125879	1994-08-02 00:00:00	0931062532	nttthuy	$2y$10$UY0I9XOP7jgNVGeKtD0Yb.AdRcKVixaJHJBpuDewhmilM2Cg8ZgSe	f	\N	4	2	2023-11-14 00:00:00	2023-11-16 03:19:35	2023-11-16 03:19:35	\N	nttthuy123@gmail.com	1	1	100867024863	vietinbank	CÔNG NHÂN MAY	1	theo sản phẩm	200403	\N
80	Phan Thị Bích	049169016130	1969-11-10 00:00:00	0905968714	ptbich	$2y$10$iyjCtVc/1SyUG3YGYStWP.Lm/PMhOLSvmQ1Zyy/f3ObEF1mpCfmsS	f	\N	4	2	2023-11-07 00:00:00	2023-11-16 03:25:24	2023-11-16 03:25:24	\N	ptbich123@gmail.com	1	1	chưa có	chưa có	CÔNG NHÂN MAY	1	theo sản phẩm	129481	\N
84	Nguyễn Hồng Cơ	049055223368	2005-01-01 00:00:00	0905122114	nhongco	$2y$10$CPwAcmwRudZo3a0B38nQcuCBHu8Yfz1zxtmYoo5mwjGLIStjX5m/.	f	\N	4	1	2023-10-18 00:00:00	2023-11-16 06:02:43	2023-11-16 06:03:02	\N	nhco12345@gmail.com	0	1	chưa có	chưa có	gấp xếp	1	theo sản phẩm	922434	\N
83	Trần Thị Ngọc Loan	049025815624	2002-01-01 00:00:00	0905555465	trantnloan	$2y$10$2jCVxpFpY6mkbi7bfl7svu/Wx6dqsILT5wn8gKJHdLaeUM3czzldu	f	\N	4	1	2023-10-14 00:00:00	2023-11-16 06:00:20	2023-11-16 06:03:18	\N	ttnloan123@gmail.com	0	1	chưa có	chưa có	GẤP XẾP	1	theo sản phẩm	757734	\N
82	Phan Thị Tường Vy	014725803690	2004-01-01 00:00:00	0905222333	phanttvy	$2y$10$qGsjCdKtvtu69pbrZ007Uej.OLAz5QfcQqHmUSXwih8iX2Exq6zDy	f	\N	4	1	2023-10-18 00:00:00	2023-11-16 05:53:17	2023-11-16 06:03:30	\N	vy12345@gmail.com	0	1	chưa có	chưa có	GẤP XẾP	1	theo sản phẩm	770425	\N
81	Tước Quyền	049199955522	1999-01-01 00:00:00	0905111222	tuocquyen	$2y$10$BqrHNPwX6nmYjvNWpz.Vcei5u4/6a/kduHRZhR0jLx7pTDfr.ArIO	t	\N	2	1	2023-10-04 00:00:00	2023-11-16 04:29:05	2023-11-16 06:03:43	\N	12345@gmail.com	0	1	chưa có	chưa có	GẤP XẾP	1	theo sản phẩm	310105	\N
85	Nguyễn Thị Như Ý	049325622233	2004-01-01 00:00:00	0905125115	nthinhuy	$2y$10$mJZhAnb6.DplCLjmLLDTSeiqoJOWTjH3w1M34W43EROTCjm2TByqm	f	\N	4	1	2023-10-17 00:00:00	2023-11-16 06:05:56	2023-11-16 06:06:07	\N	ntny12345@gmail.com	0	1	chưa có	chưa có	gấp xếp	1	theo sản phẩm	799257	\N
86	Trương Tống Tuấn Kiệt	049176000000	2005-07-20 00:00:00	0100000	tuankiet	$2y$10$bYD.hplSUi3RJkYjf91zSetorShGGNBw1cewdQUD6i9Gkah0u8J8.	f	\N	4	1	2023-10-19 00:00:00	2023-11-17 03:33:41	2023-11-17 03:33:41	\N	tuankiet@gmail.com	1	1	9887645280705	MBBANK	đóng gói	1	theo giờ	284274	\N
87	Lê Thị Thu Thuỷ	205949777	1973-06-08 00:00:00	0766749498	thuthuylt	$2y$10$gskuPMoSKG0lXvlgetC29OsSk2T2GxJab7AgwpYEvc9kqwdjXPAZG	f	\N	4	2	2023-11-15 00:00:00	2023-11-18 03:57:31	2023-11-18 03:57:31	\N	lttt@gmail.com	1	1	105006147860	Vietinbank	Công nhân may	1	theo sản phẩm	614280	\N
\.


--
-- Data for Name: w_devices; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.w_devices (id, name, code, date_buy, date_warranty, in_charge_user, status, created_at, updated_at, deleted_at) FROM stdin;
1	aaa	bbb	01-10-2023	17-10-2023	9	1	2023-10-26 07:28:50	2023-10-27 18:11:55	2023-10-27 18:11:55
\.


--
-- Data for Name: w_materials; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.w_materials (id, quantity_input, quantity_contain, quantity_use, in_charge_user, date_added, created_at, updated_at, deleted_at, material_id, supplier_id) FROM stdin;
1	100000	\N	\N	\N	2023-10-28 00:00:00	2023-10-28 16:52:16	2023-11-08 04:32:19	2023-11-08 04:32:19	1	1
2	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 02:52:21	2023-11-09 02:54:17	2023-11-09 02:54:17	4	3
3	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 02:54:35	2023-11-09 02:54:42	2023-11-09 02:54:42	4	3
4	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 02:54:55	2023-11-09 03:27:02	2023-11-09 03:27:02	4	3
5	111	\N	\N	\N	2023-11-09 00:00:00	2023-11-09 03:00:56	2023-11-09 03:27:05	2023-11-09 03:27:05	1	1
7	1111	\N	\N	\N	2023-11-09 00:00:00	2023-11-09 03:28:00	2023-11-09 03:28:04	2023-11-09 03:28:04	1	1
8	1111	\N	\N	\N	2023-11-09 00:00:00	2023-11-09 03:28:17	2023-11-09 03:28:29	2023-11-09 03:28:29	8	1
6	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 03:26:55	2023-11-09 03:30:03	2023-11-09 03:30:03	4	1
9	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 03:29:55	2023-11-09 03:30:06	2023-11-09 03:30:06	4	3
10	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 03:30:27	2023-11-09 03:49:49	2023-11-09 03:49:49	3	3
12	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 03:52:52	2023-11-09 03:55:46	2023-11-09 03:55:46	4	3
11	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 03:50:04	2023-11-09 07:02:29	2023-11-09 07:02:29	1	3
13	5	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 05:38:22	2023-11-09 07:12:56	2023-11-09 07:12:56	9	3
14	3	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 05:39:09	2023-11-09 07:13:00	2023-11-09 07:13:00	8	3
15	0	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 05:41:08	2023-11-09 07:13:03	2023-11-09 07:13:03	6	3
16	127,8	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 05:42:23	2023-11-09 07:13:08	2023-11-09 07:13:08	5	3
18	11640	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:11:00	2023-11-09 07:13:14	2023-11-09 07:13:14	6	1
19	23,5	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:13:44	2023-11-09 07:13:53	2023-11-09 07:13:53	13	4
20	111,8	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:14:33	2023-11-09 07:14:33	\N	12	4
21	65	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:15:07	2023-11-09 07:15:07	\N	14	4
22	0.25	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:16:25	2023-11-09 07:16:25	\N	6	5
23	3,4	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:18:17	2023-11-09 07:18:17	\N	8	5
24	5,9	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:20:08	2023-11-09 07:20:08	\N	9	5
27	11640	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 07:30:35	2023-11-09 07:30:35	\N	15	6
28	41	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:01:27	2023-11-09 08:01:27	\N	18	7
29	112,6	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:04:23	2023-11-09 08:04:23	\N	4	9
30	127,8	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:09:48	2023-11-09 08:09:48	\N	5	10
31	19	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:11:36	2023-11-09 08:11:36	\N	19	11
32	44	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:12:03	2023-11-09 08:12:03	\N	20	11
33	39	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:12:48	2023-11-09 08:12:48	\N	21	11
34	11	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:13:20	2023-11-09 08:13:20	\N	22	11
35	14,7	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:18:50	2023-11-09 08:18:50	\N	23	10
36	18,1	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:21:46	2023-11-09 08:21:46	\N	25	4
37	2,7	\N	\N	\N	2023-11-01 00:00:00	2023-11-09 08:21:59	2023-11-09 08:21:59	\N	26	4
17	23,5	\N	10	\N	2023-11-01 00:00:00	2023-11-09 07:08:35	2023-11-15 09:16:27	\N	13	4
38	700	\N	\N	\N	2023-11-16 00:00:00	2023-11-16 03:34:17	2023-11-16 03:34:17	\N	27	8
39	59	\N	\N	\N	2023-11-16 00:00:00	2023-11-16 03:34:52	2023-11-16 03:34:52	\N	28	8
40	1590	\N	\N	\N	2023-11-16 00:00:00	2023-11-16 03:35:26	2023-11-16 03:35:26	\N	29	8
25	2	\N	\N	\N	2023-11-15 00:00:00	2023-11-09 07:25:35	2023-11-16 03:41:27	\N	16	5
26	3	\N	\N	\N	2023-11-15 00:00:00	2023-11-09 07:29:09	2023-11-16 03:42:02	\N	17	5
\.


--
-- Data for Name: w_semi_products; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.w_semi_products (id, name, sd_map, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: w_tools; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.w_tools (id, name, code, date_buy, date_warranty, quantity, in_charge_user, status, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: work_quantities; Type: TABLE DATA; Schema: public; Owner: default
--

COPY public.work_quantities (id, product_step_id, product_id, user_id, quantity, date_work, created_at, updated_at) FROM stdin;
1	1	2	30	0	2023-10-14 00:00:00	2023-10-14 23:14:06	2023-10-14 23:14:06
2	2	2	19	0	2023-10-14 00:00:00	2023-10-14 23:14:23	2023-10-14 23:14:23
3	3	2	27	0	2023-10-14 00:00:00	2023-10-14 23:14:31	2023-10-14 23:14:31
4	4	2	11	0	2023-10-14 00:00:00	2023-10-14 23:14:38	2023-10-14 23:14:38
5	5	2	19	0	2023-10-14 00:00:00	2023-10-14 23:14:46	2023-10-14 23:14:46
6	6	2	27	0	2023-10-14 00:00:00	2023-10-14 23:14:52	2023-10-14 23:14:52
7	7	2	16	0	2023-10-14 00:00:00	2023-10-14 23:14:58	2023-10-14 23:14:58
8	8	2	48	0	2023-10-14 00:00:00	2023-10-14 23:15:07	2023-10-14 23:15:07
9	9	2	49	0	2023-10-14 00:00:00	2023-10-14 23:15:15	2023-10-14 23:15:15
10	10	2	9	0	2023-10-14 00:00:00	2023-10-14 23:15:27	2023-10-14 23:15:27
11	11	2	49	0	2023-10-14 00:00:00	2023-10-14 23:15:33	2023-10-14 23:15:33
12	12	2	19	0	2023-10-14 00:00:00	2023-10-14 23:15:39	2023-10-14 23:15:39
15	13	2	27	0	2023-10-14 00:00:00	2023-10-14 23:16:55	2023-10-14 23:16:55
16	14	2	11	0	2023-10-14 00:00:00	2023-10-14 23:17:03	2023-10-14 23:17:03
17	15	2	34	0	2023-10-14 00:00:00	2023-10-14 23:17:08	2023-10-14 23:17:08
19	17	2	33	0	2023-10-14 00:00:00	2023-10-14 23:17:19	2023-10-14 23:17:19
20	18	2	37	0	2023-10-14 00:00:00	2023-10-14 23:17:32	2023-10-14 23:17:32
21	19	2	19	0	2023-10-14 00:00:00	2023-10-14 23:17:39	2023-10-14 23:17:39
25	23	2	17	0	2023-10-14 00:00:00	2023-10-14 23:20:17	2023-10-14 23:20:17
26	25	2	34	0	2023-10-14 00:00:00	2023-10-14 23:20:31	2023-10-14 23:20:31
28	27	1	45	0	2023-10-14 00:00:00	2023-10-14 23:21:40	2023-10-14 23:21:40
29	28	1	26	0	2023-10-14 00:00:00	2023-10-14 23:21:56	2023-10-14 23:21:56
30	29	1	34	0	2023-10-14 00:00:00	2023-10-14 23:22:24	2023-10-14 23:22:24
31	30	1	30	0	2023-10-14 00:00:00	2023-10-14 23:22:41	2023-10-14 23:22:41
33	32	1	25	0	2023-10-14 00:00:00	2023-10-14 23:23:14	2023-10-14 23:23:14
34	33	1	19	0	2023-10-14 00:00:00	2023-10-14 23:23:38	2023-10-14 23:23:38
36	35	1	17	0	2023-10-14 00:00:00	2023-10-14 23:24:32	2023-10-14 23:24:32
37	1	2	29	0	2023-10-16 00:00:00	2023-10-15 03:33:58	2023-10-15 03:33:58
38	1	2	30	0	2023-10-16 00:00:00	2023-10-15 03:33:58	2023-10-15 03:33:58
39	1	2	32	0	2023-10-16 00:00:00	2023-10-15 03:33:58	2023-10-15 03:33:58
42	20	2	8	0	2023-09-30 00:00:00	2023-10-15 03:53:03	2023-10-15 03:53:03
43	20	2	9	0	2023-09-30 00:00:00	2023-10-15 03:53:03	2023-10-15 03:53:03
44	20	2	23	0	2023-09-30 00:00:00	2023-10-15 03:53:03	2023-10-15 03:53:03
82	21	1	6	0	2023-10-21 00:00:00	2023-10-21 07:13:32	2023-11-10 08:47:51
13	20	1	6	0	2023-10-14 00:00:00	2023-10-14 23:16:47	2023-11-10 08:47:51
47	22	1	8	550	2023-09-06 00:00:00	2023-10-16 17:32:54	2023-10-16 17:33:42
48	22	1	10	550	2023-09-06 00:00:00	2023-10-16 17:32:54	2023-10-16 17:33:42
49	36	1	9	1750	2023-09-06 00:00:00	2023-10-16 18:01:47	2023-10-16 18:02:01
58	31	1	17	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
51	34	1	43	1300	2023-09-06 00:00:00	2023-10-16 18:04:22	2023-10-16 18:04:44
52	32	1	21	670	2023-09-06 00:00:00	2023-10-16 18:07:02	2023-10-16 18:07:53
53	32	1	32	240	2023-09-06 00:00:00	2023-10-16 18:07:02	2023-10-16 18:07:53
70	28	1	26	0	2023-09-06 00:00:00	2023-10-17 01:52:11	2023-10-17 01:52:11
71	28	1	29	0	2023-09-06 00:00:00	2023-10-17 01:52:11	2023-10-17 01:52:11
56	32	1	25	660	2023-09-06 00:00:00	2023-10-16 18:07:02	2023-10-16 18:07:53
57	32	1	39	330	2023-09-06 00:00:00	2023-10-16 18:07:02	2023-10-16 18:07:53
50	34	1	17	1700	2023-09-06 00:00:00	2023-10-16 18:04:22	2023-10-17 01:48:41
59	31	1	22	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
60	31	1	34	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
32	31	1	20	160	2023-10-14 00:00:00	2023-10-14 23:22:59	2023-11-15 02:20:05
62	31	1	40	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
54	32	1	42	172	2023-09-06 00:00:00	2023-10-16 18:07:02	2023-10-17 01:48:41
63	31	1	42	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
55	32	1	46	145	2023-09-06 00:00:00	2023-10-16 18:07:02	2023-10-17 01:48:41
64	31	1	46	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
18	16	2	20	0	2023-10-14 00:00:00	2023-10-14 23:17:14	2023-11-15 02:20:05
66	31	1	36	300	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-10-17 01:48:41
67	29	1	9	0	2023-09-06 00:00:00	2023-10-17 01:50:40	2023-10-17 01:50:40
68	29	1	11	0	2023-09-06 00:00:00	2023-10-17 01:50:40	2023-10-17 01:50:40
69	29	1	44	0	2023-09-06 00:00:00	2023-10-17 01:50:40	2023-10-17 01:50:40
72	28	1	36	0	2023-09-06 00:00:00	2023-10-17 01:52:11	2023-10-17 01:52:11
81	38	3	32	0	2023-10-21 00:00:00	2023-10-21 07:11:22	2023-10-21 07:11:22
86	21	1	10	0	2023-10-21 00:00:00	2023-10-21 07:13:32	2023-10-21 07:13:32
85	21	1	9	0	2023-10-21 00:00:00	2023-10-21 07:13:32	2023-10-21 08:26:19
41	20	2	7	0	2023-09-30 00:00:00	2023-10-15 03:53:03	2023-11-10 08:48:57
84	21	1	8	0	2023-10-21 00:00:00	2023-10-21 07:13:32	2023-10-21 08:26:19
79	39	3	38	0	2023-10-21 00:00:00	2023-10-21 06:57:33	2023-11-15 02:19:37
40	20	2	6	0	2023-09-30 00:00:00	2023-10-15 03:53:03	2023-11-10 08:47:51
24	24	1	23	180	2023-10-14 00:00:00	2023-10-14 23:19:52	2023-11-02 09:55:56
27	26	1	30	325	2023-10-14 00:00:00	2023-10-14 23:21:21	2023-11-02 09:57:56
35	34	1	17	200	2023-10-14 00:00:00	2023-10-14 23:24:04	2023-11-02 09:59:45
78	39	3	19	0	2023-10-21 00:00:00	2023-10-21 06:57:33	2023-11-03 06:19:32
80	39	3	28	500	2023-10-21 00:00:00	2023-10-21 06:57:33	2023-11-03 06:19:32
73	38	3	30	418	2023-10-21 00:00:00	2023-10-21 06:56:43	2023-11-03 06:29:06
74	38	3	34	0	2023-10-21 00:00:00	2023-10-21 06:56:43	2023-11-03 06:29:06
75	38	3	45	0	2023-10-21 00:00:00	2023-10-21 06:56:43	2023-11-03 06:29:06
76	38	3	49	209	2023-10-21 00:00:00	2023-10-21 06:56:43	2023-11-03 06:29:06
23	22	1	8	350	2023-10-14 00:00:00	2023-10-14 23:18:03	2023-11-13 09:33:10
14	20	1	7	0	2023-10-14 00:00:00	2023-10-14 23:16:47	2023-11-10 08:48:57
22	21	1	7	0	2023-10-14 00:00:00	2023-10-14 23:17:50	2023-11-10 08:48:57
77	38	3	47	111	2023-10-21 00:00:00	2023-10-21 06:56:43	2023-11-13 09:02:39
45	22	1	6	650	2023-09-06 00:00:00	2023-10-16 17:32:54	2023-11-10 08:47:51
83	21	1	7	0	2023-10-21 00:00:00	2023-10-21 07:13:32	2023-11-10 08:48:57
61	31	1	38	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-11-15 02:19:37
65	31	1	20	0	2023-09-06 00:00:00	2023-10-17 01:46:08	2023-11-15 02:20:05
87	23	1	45	490	2023-10-02 00:00:00	2023-10-21 08:10:13	2023-10-21 08:10:19
161	22	1	6	450	2023-10-12 00:00:00	2023-10-21 09:34:40	2023-11-10 08:47:51
154	22	1	6	400	2023-10-11 00:00:00	2023-10-21 09:25:08	2023-11-10 08:47:51
89	21	1	8	500	2023-10-02 00:00:00	2023-10-21 08:13:28	2023-10-21 08:28:00
91	21	1	9	0	2023-10-02 00:00:00	2023-10-21 08:27:31	2023-10-21 08:28:00
119	22	1	6	500	2023-10-07 00:00:00	2023-10-21 08:47:44	2023-11-10 08:47:51
120	22	1	7	500	2023-10-07 00:00:00	2023-10-21 08:47:44	2023-11-10 08:48:57
93	21	1	7	250	2023-10-03 00:00:00	2023-10-21 08:30:32	2023-11-10 08:48:57
94	21	1	8	250	2023-10-03 00:00:00	2023-10-21 08:30:32	2023-10-27 04:20:14
96	21	1	10	250	2023-10-03 00:00:00	2023-10-21 08:31:56	2023-10-27 04:20:14
95	21	1	9	0	2023-10-03 00:00:00	2023-10-21 08:30:32	2023-10-21 08:32:47
166	36	1	9	1175	2023-10-12 00:00:00	2023-10-21 09:36:01	2023-11-02 06:41:09
97	36	1	6	525	2023-10-03 00:00:00	2023-10-21 08:35:12	2023-11-10 08:47:51
168	36	1	47	408	2023-10-12 00:00:00	2023-10-21 09:36:01	2023-11-13 09:02:39
99	36	1	8	400	2023-10-03 00:00:00	2023-10-21 08:35:12	2023-10-21 08:36:57
100	36	1	10	400	2023-10-03 00:00:00	2023-10-21 08:35:12	2023-10-21 08:36:57
90	21	1	6	500	2023-10-02 00:00:00	2023-10-21 08:27:31	2023-11-10 08:47:51
88	21	1	7	500	2023-10-02 00:00:00	2023-10-21 08:13:28	2023-11-10 08:48:57
103	36	1	8	562	2023-10-04 00:00:00	2023-10-21 08:39:03	2023-10-21 08:39:30
104	36	1	10	563	2023-10-04 00:00:00	2023-10-21 08:39:03	2023-10-21 08:39:30
107	36	1	8	0	2023-10-05 00:00:00	2023-10-21 08:41:31	2023-10-21 08:41:31
108	36	1	10	0	2023-10-05 00:00:00	2023-10-21 08:41:31	2023-10-21 08:41:31
101	36	1	6	800	2023-10-04 00:00:00	2023-10-21 08:39:03	2023-11-10 08:47:51
98	36	1	7	525	2023-10-03 00:00:00	2023-10-21 08:35:12	2023-11-10 08:48:57
111	22	1	8	338	2023-10-05 00:00:00	2023-10-21 08:43:08	2023-10-21 08:43:48
112	22	1	10	337	2023-10-05 00:00:00	2023-10-21 08:43:08	2023-10-21 08:43:48
105	36	1	6	0	2023-10-05 00:00:00	2023-10-21 08:41:31	2023-11-10 08:47:51
102	36	1	7	800	2023-10-04 00:00:00	2023-10-21 08:39:03	2023-11-10 08:48:57
115	22	1	8	275	2023-10-06 00:00:00	2023-10-21 08:45:40	2023-10-21 08:46:08
116	22	1	49	0	2023-10-06 00:00:00	2023-10-21 08:45:40	2023-10-21 08:46:08
117	22	1	10	275	2023-10-06 00:00:00	2023-10-21 08:45:40	2023-10-21 08:46:08
118	21	1	49	143	2023-10-06 00:00:00	2023-10-21 08:46:53	2023-10-21 08:47:00
109	22	1	6	525	2023-10-05 00:00:00	2023-10-21 08:43:08	2023-11-10 08:47:51
110	22	1	7	525	2023-10-05 00:00:00	2023-10-21 08:43:08	2023-11-10 08:48:57
121	22	1	8	350	2023-10-07 00:00:00	2023-10-21 08:47:44	2023-10-21 08:48:09
122	22	1	9	400	2023-10-07 00:00:00	2023-10-21 08:47:44	2023-10-21 08:48:09
123	22	1	10	350	2023-10-07 00:00:00	2023-10-21 08:47:44	2023-10-21 08:48:09
113	22	1	6	500	2023-10-06 00:00:00	2023-10-21 08:45:40	2023-11-10 08:47:51
114	22	1	7	500	2023-10-06 00:00:00	2023-10-21 08:45:40	2023-11-10 08:48:57
126	22	1	8	250	2023-10-08 00:00:00	2023-10-21 08:49:34	2023-10-21 08:49:50
127	22	1	10	250	2023-10-08 00:00:00	2023-10-21 08:49:34	2023-10-21 08:49:50
130	22	1	8	350	2023-10-09 00:00:00	2023-10-21 08:50:48	2023-10-21 08:51:54
131	22	1	17	125	2023-10-09 00:00:00	2023-10-21 08:50:48	2023-10-21 08:51:54
132	22	1	49	125	2023-10-09 00:00:00	2023-10-21 08:50:48	2023-10-21 08:51:54
133	22	1	10	350	2023-10-09 00:00:00	2023-10-21 08:50:48	2023-10-21 08:51:54
134	22	1	9	100	2023-10-09 00:00:00	2023-10-21 08:54:44	2023-10-21 08:54:59
170	22	1	7	450	2023-10-13 00:00:00	2023-10-21 09:53:01	2023-11-10 08:48:57
136	21	1	49	63	2023-10-09 00:00:00	2023-10-21 08:55:45	2023-10-21 08:55:59
138	36	1	9	650	2023-10-09 00:00:00	2023-10-21 08:57:01	2023-10-21 08:57:07
124	22	1	6	450	2023-10-08 00:00:00	2023-10-21 08:49:34	2023-11-10 08:47:51
125	22	1	7	450	2023-10-08 00:00:00	2023-10-21 08:49:34	2023-11-10 08:48:57
141	22	1	8	350	2023-10-10 00:00:00	2023-10-21 08:58:27	2023-10-21 08:59:07
142	22	1	10	350	2023-10-10 00:00:00	2023-10-21 08:58:27	2023-10-21 08:59:07
143	21	1	48	163	2023-10-10 00:00:00	2023-10-21 09:01:40	2023-10-21 09:03:54
144	21	1	23	45	2023-10-10 00:00:00	2023-10-21 09:01:40	2023-10-21 09:03:54
148	36	1	47	0	2023-10-10 00:00:00	2023-10-21 09:04:57	2023-11-13 09:02:39
137	21	1	47	70	2023-10-09 00:00:00	2023-10-21 08:55:45	2023-11-13 09:02:39
147	36	1	48	0	2023-10-10 00:00:00	2023-10-21 09:04:57	2023-11-08 07:26:26
146	36	1	9	0	2023-10-10 00:00:00	2023-10-21 09:04:57	2023-11-08 07:26:26
149	21	1	35	100	2023-10-11 00:00:00	2023-10-21 09:17:27	2023-10-21 09:19:04
150	21	1	43	80	2023-10-11 00:00:00	2023-10-21 09:17:27	2023-10-21 09:19:04
151	36	1	9	1200	2023-10-11 00:00:00	2023-10-21 09:21:41	2023-10-21 09:22:56
162	22	1	7	450	2023-10-12 00:00:00	2023-10-21 09:34:40	2023-11-10 08:48:57
145	21	1	47	155	2023-10-10 00:00:00	2023-10-21 09:01:40	2023-11-13 09:02:39
157	22	1	35	0	2023-10-11 00:00:00	2023-10-21 09:25:08	2023-10-21 09:26:47
158	22	1	49	75	2023-10-11 00:00:00	2023-10-21 09:25:08	2023-10-21 09:26:47
159	22	1	10	300	2023-10-11 00:00:00	2023-10-21 09:25:08	2023-10-21 09:26:47
160	22	1	17	100	2023-10-11 00:00:00	2023-10-21 09:27:59	2023-10-21 09:28:06
128	22	1	6	500	2023-10-09 00:00:00	2023-10-21 08:50:48	2023-11-10 08:47:51
129	22	1	7	500	2023-10-09 00:00:00	2023-10-21 08:50:48	2023-11-10 08:48:57
156	22	1	8	300	2023-10-11 00:00:00	2023-10-21 09:25:08	2023-10-21 09:26:47
139	22	1	6	475	2023-10-10 00:00:00	2023-10-21 08:58:27	2023-11-10 08:47:51
140	22	1	7	475	2023-10-10 00:00:00	2023-10-21 08:58:27	2023-11-10 08:48:57
163	22	1	8	350	2023-10-12 00:00:00	2023-10-21 09:34:40	2023-10-21 09:35:17
164	22	1	17	25	2023-10-12 00:00:00	2023-10-21 09:34:40	2023-10-21 09:35:17
165	22	1	10	350	2023-10-12 00:00:00	2023-10-21 09:34:40	2023-10-21 09:35:17
153	36	1	47	575	2023-10-11 00:00:00	2023-10-21 09:21:41	2023-11-13 09:02:39
152	36	1	48	0	2023-10-11 00:00:00	2023-10-21 09:21:41	2023-11-08 05:34:12
167	36	1	48	380	2023-10-12 00:00:00	2023-10-21 09:36:01	2023-11-02 06:41:09
171	22	1	8	350	2023-10-13 00:00:00	2023-10-21 09:53:01	2023-11-09 05:39:54
135	21	1	17	64	2023-10-09 00:00:00	2023-10-21 08:55:45	2023-10-26 09:06:25
155	22	1	7	400	2023-10-11 00:00:00	2023-10-21 09:25:08	2023-11-10 08:48:57
106	36	1	7	0	2023-10-05 00:00:00	2023-10-21 08:41:31	2023-11-10 08:48:57
92	21	1	6	250	2023-10-03 00:00:00	2023-10-21 08:30:32	2023-11-10 08:47:51
202	21	1	25	200	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
241	22	1	6	550	2023-10-23 00:00:00	2023-10-24 02:16:23	2023-11-10 08:47:51
172	22	1	9	175	2023-10-13 00:00:00	2023-10-21 09:53:01	2023-10-21 09:54:45
173	22	1	10	350	2023-10-13 00:00:00	2023-10-21 09:53:01	2023-10-21 09:54:45
174	22	1	48	0	2023-10-13 00:00:00	2023-10-23 09:22:52	2023-10-23 09:22:52
176	36	1	48	250	2023-10-13 00:00:00	2023-10-23 09:24:37	2023-10-23 09:25:42
175	22	1	47	0	2023-10-13 00:00:00	2023-10-23 09:22:52	2023-11-13 09:02:39
178	36	1	9	625	2023-10-13 00:00:00	2023-10-23 09:26:21	2023-10-23 09:26:30
180	21	1	8	0	2023-10-14 00:00:00	2023-10-23 09:33:36	2023-10-23 09:33:36
181	21	1	10	0	2023-10-14 00:00:00	2023-10-23 09:33:36	2023-10-23 09:33:36
169	22	1	6	450	2023-10-13 00:00:00	2023-10-21 09:53:01	2023-11-10 08:47:51
236	22	1	6	500	2023-10-17 00:00:00	2023-10-24 01:53:47	2023-11-10 08:47:51
205	22	1	10	350	2023-10-14 00:00:00	2023-10-23 09:58:10	2023-10-23 09:59:22
206	36	1	48	825	2023-10-14 00:00:00	2023-10-23 10:00:16	2023-10-23 10:00:58
177	36	1	47	750	2023-10-13 00:00:00	2023-10-23 09:24:37	2023-11-13 09:02:39
197	21	1	48	0	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:56:58
203	22	1	6	475	2023-10-14 00:00:00	2023-10-23 09:58:10	2023-11-10 08:47:51
214	36	1	47	0	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-11-13 09:02:39
210	36	1	8	250	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-10-24 01:27:09
222	21	1	35	100	2023-10-16 00:00:00	2023-10-24 01:33:25	2023-10-24 01:34:28
182	21	1	17	105	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
183	21	1	19	80	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
184	21	1	21	87	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
185	21	1	22	110	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
186	21	1	24	88	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
187	21	1	26	80	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
188	21	1	27	110	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
189	21	1	29	62	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
190	21	1	32	100	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
191	21	1	34	87	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
192	21	1	35	0	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
200	21	1	20	200	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-11-15 02:20:05
194	21	1	40	80	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
195	21	1	43	133	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
196	21	1	46	193	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
198	21	1	49	101	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
199	21	1	18	97	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
255	31	1	20	970	2023-10-24 00:00:00	2023-10-24 02:25:14	2023-11-15 02:20:05
201	21	1	23	135	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-10-23 09:57:16
211	36	1	9	200	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-10-24 01:27:09
212	36	1	48	850	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-10-24 01:27:09
213	36	1	10	250	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-10-24 01:27:09
217	22	1	8	250	2023-10-16 00:00:00	2023-10-24 01:30:30	2023-11-09 09:11:11
179	21	1	6	0	2023-10-14 00:00:00	2023-10-23 09:33:36	2023-11-10 08:47:51
216	22	1	7	350	2023-10-16 00:00:00	2023-10-24 01:30:30	2023-11-10 08:48:57
226	36	1	7	100	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-11-10 08:48:57
218	22	1	9	300	2023-10-16 00:00:00	2023-10-24 01:30:30	2023-10-24 01:31:52
219	22	1	10	250	2023-10-16 00:00:00	2023-10-24 01:30:30	2023-10-24 01:31:52
223	21	1	43	80	2023-10-16 00:00:00	2023-10-24 01:33:25	2023-10-24 01:34:28
224	21	1	49	121	2023-10-16 00:00:00	2023-10-24 01:33:25	2023-10-24 01:34:28
235	21	1	23	20	2023-10-17 00:00:00	2023-10-24 01:41:59	2023-10-24 01:43:18
220	21	1	24	70	2023-10-16 00:00:00	2023-10-24 01:33:25	2023-10-24 01:34:28
221	21	1	34	154	2023-10-16 00:00:00	2023-10-24 01:33:25	2023-10-24 01:34:28
215	22	1	6	350	2023-10-16 00:00:00	2023-10-24 01:30:30	2023-11-10 08:47:51
209	36	1	7	350	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-11-10 08:48:57
227	36	1	8	50	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-10-24 01:40:31
228	36	1	9	75	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-10-24 01:40:31
229	36	1	48	75	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-10-24 01:40:31
230	36	1	10	50	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-10-24 01:40:31
238	22	1	8	437	2023-10-17 00:00:00	2023-10-24 01:53:47	2023-11-09 08:19:05
232	21	1	17	33	2023-10-17 00:00:00	2023-10-24 01:41:59	2023-10-24 01:43:18
233	21	1	35	50	2023-10-17 00:00:00	2023-10-24 01:41:59	2023-10-24 01:43:18
234	21	1	49	254	2023-10-17 00:00:00	2023-10-24 01:41:59	2023-10-24 01:43:18
243	22	1	8	400	2023-10-23 00:00:00	2023-10-24 02:16:23	2023-11-09 08:23:32
239	22	1	9	300	2023-10-17 00:00:00	2023-10-24 01:53:47	2023-10-24 01:55:38
237	22	1	7	500	2023-10-17 00:00:00	2023-10-24 01:53:47	2023-11-10 08:48:57
244	22	1	9	550	2023-10-23 00:00:00	2023-10-24 02:16:23	2023-10-24 02:17:37
245	22	1	10	400	2023-10-23 00:00:00	2023-10-24 02:16:23	2023-10-24 02:17:37
208	36	1	6	350	2023-10-16 00:00:00	2023-10-24 01:25:17	2023-11-10 08:47:51
204	22	1	7	475	2023-10-14 00:00:00	2023-10-23 09:58:10	2023-11-10 08:48:57
240	22	1	10	438	2023-10-17 00:00:00	2023-10-24 01:53:47	2023-10-24 01:55:38
225	36	1	6	100	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-11-10 08:47:51
207	36	1	47	400	2023-10-14 00:00:00	2023-10-23 10:00:16	2023-11-13 09:02:39
251	28	1	29	175	2023-10-24 00:00:00	2023-10-24 02:23:17	2023-10-25 08:15:59
247	32	1	32	200	2023-10-24 00:00:00	2023-10-24 02:19:40	2023-10-25 00:42:34
248	32	1	46	209	2023-10-24 00:00:00	2023-10-24 02:19:40	2023-10-25 00:42:34
254	31	1	45	270	2023-10-24 00:00:00	2023-10-24 02:25:14	2023-11-02 07:28:59
246	32	1	21	180	2023-10-24 00:00:00	2023-10-24 02:19:40	2023-10-25 00:42:34
1252	31	1	19	25	2023-10-05 00:00:00	2023-11-03 09:57:49	2023-11-03 09:58:30
250	28	1	26	250	2023-10-24 00:00:00	2023-10-24 02:23:17	2023-10-25 08:15:59
249	32	1	25	350	2023-10-24 00:00:00	2023-10-24 02:19:40	2023-10-25 00:42:34
193	21	1	38	100	2023-10-14 00:00:00	2023-10-23 09:50:12	2023-11-15 02:19:37
242	22	1	7	550	2023-10-23 00:00:00	2023-10-24 02:16:23	2023-11-10 08:48:57
253	31	1	38	400	2023-10-24 00:00:00	2023-10-24 02:25:14	2023-11-15 02:19:37
256	29	1	27	960	2023-10-23 00:00:00	2023-10-24 02:28:33	2023-10-24 02:28:55
319	29	1	31	1090	2023-10-20 00:00:00	2023-10-24 03:47:10	2023-11-13 08:45:44
258	27	1	19	1710	2023-10-23 00:00:00	2023-10-24 02:33:55	2023-10-24 02:34:10
260	11	2	49	0	2023-10-13 00:00:00	2023-10-24 02:38:23	2023-10-24 02:38:23
261	21	1	9	0	2023-10-14 00:00:00	2023-10-24 02:38:51	2023-10-24 02:38:51
262	32	1	21	700	2023-10-23 00:00:00	2023-10-24 02:40:57	2023-10-24 02:43:35
263	32	1	32	350	2023-10-23 00:00:00	2023-10-24 02:40:57	2023-10-24 02:43:35
264	32	1	46	450	2023-10-23 00:00:00	2023-10-24 02:40:57	2023-10-24 02:43:35
259	32	1	25	850	2023-10-23 00:00:00	2023-10-24 02:36:40	2023-10-24 02:43:35
280	38	3	45	219	2023-10-23 00:00:00	2023-10-24 02:59:12	2023-11-15 04:17:27
266	28	1	29	670	2023-10-23 00:00:00	2023-10-24 02:44:51	2023-10-24 02:45:07
330	30	1	30	1300	2023-10-20 00:00:00	2023-10-24 03:50:23	2023-10-26 08:18:37
267	31	1	22	620	2023-10-23 00:00:00	2023-10-24 02:48:03	2023-10-24 02:48:40
325	31	1	38	400	2023-10-20 00:00:00	2023-10-24 03:48:56	2023-11-15 02:19:37
269	31	1	45	200	2023-10-23 00:00:00	2023-10-24 02:48:03	2023-10-24 02:48:40
323	31	1	20	1060	2023-10-16 00:00:00	2023-10-24 03:47:51	2023-11-15 02:20:05
271	33	1	19	1270	2023-10-23 00:00:00	2023-10-24 02:50:20	2023-10-24 02:50:46
272	33	1	28	1195	2023-10-23 00:00:00	2023-10-24 02:50:20	2023-10-24 02:50:46
273	23	1	35	1282	2023-10-23 00:00:00	2023-10-24 02:53:52	2023-10-24 02:54:17
274	23	1	43	1060	2023-10-23 00:00:00	2023-10-24 02:53:52	2023-10-24 02:54:17
252	31	1	22	640	2023-10-24 00:00:00	2023-10-24 02:25:14	2023-10-25 00:53:23
276	26	1	49	1710	2023-10-23 00:00:00	2023-10-24 02:56:43	2023-10-24 02:56:54
278	38	3	34	418	2023-10-23 00:00:00	2023-10-24 02:59:12	2023-10-26 09:21:39
279	38	3	35	158	2023-10-23 00:00:00	2023-10-24 02:59:12	2023-10-24 03:05:20
281	38	3	49	209	2023-10-23 00:00:00	2023-10-24 02:59:12	2023-10-26 09:21:39
312	21	1	47	255	2023-10-20 00:00:00	2023-10-24 03:43:02	2023-11-13 09:02:39
326	31	1	45	120	2023-10-20 00:00:00	2023-10-24 03:48:56	2023-11-03 07:11:16
265	28	1	26	1100	2023-10-23 00:00:00	2023-10-24 02:44:51	2023-10-26 09:20:58
284	29	1	27	1000	2023-10-16 00:00:00	2023-10-24 03:07:19	2023-10-24 03:29:33
285	29	1	43	170	2023-10-16 00:00:00	2023-10-24 03:07:19	2023-10-24 03:29:33
286	29	1	49	92	2023-10-16 00:00:00	2023-10-24 03:07:19	2023-10-24 03:29:33
287	29	1	23	30	2023-10-16 00:00:00	2023-10-24 03:07:19	2023-10-24 03:29:33
282	38	3	47	434	2023-10-23 00:00:00	2023-10-24 02:59:12	2023-11-13 09:02:39
294	21	1	10	0	2023-10-16 00:00:00	2023-10-24 03:31:01	2023-10-24 03:31:17
295	21	1	23	85	2023-10-16 00:00:00	2023-10-24 03:31:01	2023-10-24 03:31:17
289	22	1	6	650	2023-10-20 00:00:00	2023-10-24 03:30:47	2023-11-10 08:47:51
257	29	1	31	1000	2023-10-23 00:00:00	2023-10-24 02:28:33	2023-11-13 08:45:44
268	31	1	38	450	2023-10-23 00:00:00	2023-10-24 02:48:03	2023-11-15 02:19:37
292	22	1	9	525	2023-10-20 00:00:00	2023-10-24 03:30:47	2023-10-24 03:31:25
293	22	1	10	500	2023-10-20 00:00:00	2023-10-24 03:30:47	2023-10-24 03:31:25
310	28	1	26	1120	2023-10-16 00:00:00	2023-10-24 03:42:08	2023-10-26 08:22:24
297	28	1	29	800	2023-10-20 00:00:00	2023-10-24 03:34:44	2023-10-24 03:35:03
298	32	1	21	800	2023-10-16 00:00:00	2023-10-24 03:35:01	2023-10-24 03:37:03
299	32	1	32	300	2023-10-16 00:00:00	2023-10-24 03:35:01	2023-10-24 03:37:03
300	32	1	46	430	2023-10-16 00:00:00	2023-10-24 03:35:01	2023-10-24 03:37:03
301	32	1	25	850	2023-10-16 00:00:00	2023-10-24 03:35:01	2023-10-24 03:37:03
302	32	1	21	750	2023-10-20 00:00:00	2023-10-24 03:38:51	2023-10-24 03:39:32
303	32	1	32	160	2023-10-20 00:00:00	2023-10-24 03:38:51	2023-10-24 03:39:32
304	32	1	46	385	2023-10-20 00:00:00	2023-10-24 03:38:51	2023-10-24 03:39:32
305	32	1	25	800	2023-10-20 00:00:00	2023-10-24 03:38:51	2023-10-24 03:39:32
306	27	1	19	1890	2023-10-20 00:00:00	2023-10-24 03:40:52	2023-10-24 03:41:19
307	27	1	28	1000	2023-10-20 00:00:00	2023-10-24 03:40:52	2023-10-24 03:41:19
308	33	1	19	1100	2023-10-20 00:00:00	2023-10-24 03:41:58	2023-10-24 03:42:17
309	33	1	28	1000	2023-10-20 00:00:00	2023-10-24 03:41:58	2023-10-24 03:42:17
283	30	1	30	1000	2023-10-23 00:00:00	2023-10-24 03:06:48	2023-10-26 09:20:11
311	28	1	29	666	2023-10-16 00:00:00	2023-10-24 03:42:08	2023-10-24 03:42:32
315	36	1	47	0	2023-10-20 00:00:00	2023-10-24 03:44:10	2023-11-13 09:02:39
313	33	1	19	1420	2023-10-16 00:00:00	2023-10-24 03:43:39	2023-10-24 03:44:13
314	33	1	40	1140	2023-10-16 00:00:00	2023-10-24 03:43:39	2023-10-24 03:44:13
328	21	1	7	0	2023-10-16 00:00:00	2023-10-24 03:49:08	2023-11-10 08:48:57
316	26	1	49	2500	2023-10-20 00:00:00	2023-10-24 03:45:24	2023-10-24 03:45:33
317	29	1	27	1000	2023-10-20 00:00:00	2023-10-24 03:47:10	2023-10-24 03:47:41
318	29	1	43	150	2023-10-20 00:00:00	2023-10-24 03:47:10	2023-10-24 03:47:41
288	29	1	31	1122	2023-10-16 00:00:00	2023-10-24 03:07:19	2023-11-13 08:45:44
320	31	1	22	720	2023-10-16 00:00:00	2023-10-24 03:47:51	2023-10-24 03:48:42
321	31	1	24	60	2023-10-16 00:00:00	2023-10-24 03:47:51	2023-10-24 03:48:42
322	31	1	45	240	2023-10-16 00:00:00	2023-10-24 03:47:51	2023-10-24 03:48:42
270	31	1	20	1015	2023-10-23 00:00:00	2023-10-24 02:48:03	2023-11-15 02:20:05
290	22	1	7	650	2023-10-20 00:00:00	2023-10-24 03:30:47	2023-11-10 08:48:57
329	21	1	17	500	2023-10-16 00:00:00	2023-10-24 03:49:08	2023-10-24 03:49:22
324	31	1	22	650	2023-10-20 00:00:00	2023-10-24 03:48:56	2023-10-24 03:49:41
331	31	1	38	400	2023-10-16 00:00:00	2023-10-24 03:51:01	2023-11-15 02:19:37
277	38	3	30	401	2023-10-23 00:00:00	2023-10-24 02:59:12	2023-11-15 04:17:27
1247	32	1	21	780	2023-10-05 00:00:00	2023-11-03 09:50:14	2023-11-03 09:50:44
296	28	1	26	1180	2023-10-20 00:00:00	2023-10-24 03:34:44	2023-10-26 08:19:17
327	31	1	20	1020	2023-10-20 00:00:00	2023-10-24 03:48:56	2023-11-15 02:20:05
332	26	1	30	427	2023-10-20 00:00:00	2023-10-24 06:25:16	2023-10-24 06:25:28
333	23	1	32	600	2023-10-20 00:00:00	2023-10-24 06:27:08	2023-10-24 06:27:35
334	24	1	24	1100	2023-10-20 00:00:00	2023-10-24 06:37:10	2023-10-24 06:37:42
335	24	1	35	100	2023-10-20 00:00:00	2023-10-24 06:37:10	2023-10-24 06:37:42
336	24	1	23	1150	2023-10-20 00:00:00	2023-10-24 06:37:10	2023-10-24 06:37:42
337	23	1	35	1228	2023-10-20 00:00:00	2023-10-24 06:38:45	2023-10-24 06:39:04
338	23	1	43	730	2023-10-20 00:00:00	2023-10-24 06:38:45	2023-10-24 06:39:04
275	37	1	43	0	2023-10-23 00:00:00	2023-10-24 02:55:22	2023-10-24 06:52:53
378	27	1	19	1750	2023-10-16 00:00:00	2023-10-24 07:26:14	2023-10-24 07:26:30
339	37	1	43	0	2023-10-20 00:00:00	2023-10-24 06:40:00	2023-10-24 06:47:12
340	34	1	17	1750	2023-10-20 00:00:00	2023-10-24 06:45:59	2023-10-24 06:47:54
341	34	1	43	600	2023-10-20 00:00:00	2023-10-24 06:47:46	2023-10-24 06:47:54
342	34	1	43	855	2023-10-23 00:00:00	2023-10-24 06:53:28	2023-10-24 06:53:36
343	34	1	17	1650	2023-10-23 00:00:00	2023-10-24 06:54:47	2023-10-24 06:54:57
344	24	1	24	1120	2023-10-23 00:00:00	2023-10-24 06:56:06	2023-10-24 06:56:21
345	24	1	23	1150	2023-10-23 00:00:00	2023-10-24 06:56:06	2023-10-24 06:56:21
1248	32	1	46	370	2023-10-05 00:00:00	2023-11-03 09:50:14	2023-11-03 09:50:44
347	28	1	29	800	2023-10-19 00:00:00	2023-10-24 07:04:01	2023-10-24 07:04:21
348	32	1	21	750	2023-10-19 00:00:00	2023-10-24 07:05:29	2023-10-24 07:06:20
349	32	1	32	300	2023-10-19 00:00:00	2023-10-24 07:05:29	2023-10-24 07:06:20
350	32	1	46	385	2023-10-19 00:00:00	2023-10-24 07:05:29	2023-10-24 07:06:20
351	32	1	25	850	2023-10-19 00:00:00	2023-10-24 07:05:29	2023-10-24 07:06:20
352	31	1	22	620	2023-10-19 00:00:00	2023-10-24 07:07:07	2023-10-24 07:08:00
391	31	1	38	370	2023-10-17 00:00:00	2023-10-24 08:02:03	2023-11-15 02:19:37
354	31	1	45	300	2023-10-19 00:00:00	2023-10-24 07:07:07	2023-10-24 07:08:00
356	24	1	24	1100	2023-10-19 00:00:00	2023-10-24 07:08:44	2023-10-24 07:09:06
357	24	1	23	1080	2023-10-19 00:00:00	2023-10-24 07:08:44	2023-10-24 07:09:06
358	29	1	49	123	2023-10-19 00:00:00	2023-10-24 07:10:18	2023-10-24 07:10:35
405	29	1	31	930	2023-10-17 00:00:00	2023-10-24 08:13:59	2023-11-13 08:45:44
360	26	1	49	1710	2023-10-19 00:00:00	2023-10-24 07:11:44	2023-10-24 07:11:56
361	27	1	19	2065	2023-10-19 00:00:00	2023-10-24 07:12:53	2023-10-24 07:13:05
362	33	1	19	1100	2023-10-19 00:00:00	2023-10-24 07:14:55	2023-10-24 07:15:28
363	33	1	28	1400	2023-10-19 00:00:00	2023-10-24 07:14:55	2023-10-24 07:15:28
346	28	1	26	1150	2023-10-19 00:00:00	2023-10-24 07:04:01	2023-10-26 08:24:27
365	29	1	27	940	2023-10-19 00:00:00	2023-10-24 07:17:02	2023-10-24 07:17:12
366	34	1	17	1600	2023-10-19 00:00:00	2023-10-24 07:18:07	2023-10-24 07:18:45
367	34	1	43	1282	2023-10-19 00:00:00	2023-10-24 07:18:07	2023-10-24 07:18:45
368	23	1	35	1400	2023-10-19 00:00:00	2023-10-24 07:19:24	2023-10-24 07:19:42
369	23	1	43	800	2023-10-19 00:00:00	2023-10-24 07:19:24	2023-10-24 07:19:42
353	31	1	38	400	2023-10-19 00:00:00	2023-10-24 07:07:07	2023-11-15 02:19:37
374	22	1	8	425	2023-10-19 00:00:00	2023-10-24 07:22:14	2023-11-09 05:53:23
372	22	1	6	575	2023-10-19 00:00:00	2023-10-24 07:22:14	2023-11-10 08:47:51
373	22	1	7	575	2023-10-19 00:00:00	2023-10-24 07:22:14	2023-11-10 08:48:57
359	29	1	31	1100	2023-10-19 00:00:00	2023-10-24 07:10:18	2023-11-13 08:45:44
375	22	1	9	450	2023-10-19 00:00:00	2023-10-24 07:22:14	2023-10-24 07:22:53
376	22	1	10	425	2023-10-19 00:00:00	2023-10-24 07:22:14	2023-10-24 07:22:53
377	23	1	43	520	2023-10-16 00:00:00	2023-10-24 07:25:27	2023-10-24 07:25:38
379	34	1	17	190	2023-10-16 00:00:00	2023-10-24 07:27:37	2023-10-24 07:27:50
380	24	1	24	986	2023-10-16 00:00:00	2023-10-24 07:28:55	2023-10-24 07:29:28
381	24	1	23	890	2023-10-16 00:00:00	2023-10-24 07:28:55	2023-10-24 07:29:28
382	23	1	35	260	2023-10-16 00:00:00	2023-10-24 07:30:01	2023-10-24 07:30:14
364	30	1	30	1500	2023-10-19 00:00:00	2023-10-24 07:16:09	2023-10-26 08:23:49
384	31	1	35	260	2023-10-16 00:00:00	2023-10-24 07:31:42	2023-10-24 07:31:56
385	26	1	30	650	2023-10-16 00:00:00	2023-10-24 07:32:39	2023-10-24 07:32:52
386	26	1	49	325	2023-10-16 00:00:00	2023-10-24 07:34:21	2023-10-24 07:34:33
387	26	1	45	0	2023-10-16 00:00:00	2023-10-24 07:35:55	2023-10-24 07:35:55
388	28	1	45	30	2023-10-16 00:00:00	2023-10-24 07:39:28	2023-10-24 07:40:12
389	28	1	49	105	2023-10-16 00:00:00	2023-10-24 07:39:28	2023-10-24 07:40:12
390	31	1	22	620	2023-10-17 00:00:00	2023-10-24 08:02:03	2023-10-24 08:02:39
392	31	1	20	1030	2023-10-17 00:00:00	2023-10-24 08:02:03	2023-11-15 02:20:05
355	31	1	20	1020	2023-10-19 00:00:00	2023-10-24 07:07:07	2023-11-15 02:20:05
393	34	1	17	1300	2023-10-17 00:00:00	2023-10-24 08:06:54	2023-10-24 08:07:14
394	34	1	43	1300	2023-10-17 00:00:00	2023-10-24 08:06:54	2023-10-24 08:07:14
395	25	1	34	1000	2023-10-17 00:00:00	2023-10-24 08:08:00	2023-10-24 08:08:18
396	25	1	18	900	2023-10-17 00:00:00	2023-10-24 08:08:00	2023-10-24 08:08:18
397	27	1	19	2300	2023-10-17 00:00:00	2023-10-24 08:09:17	2023-10-24 08:09:27
414	33	1	45	700	2023-10-17 00:00:00	2023-10-24 08:20:44	2023-10-24 08:20:57
399	26	1	30	867	2023-10-17 00:00:00	2023-10-24 08:10:42	2023-10-24 08:11:11
400	26	1	43	433	2023-10-17 00:00:00	2023-10-24 08:10:42	2023-10-24 08:11:11
401	26	1	49	867	2023-10-17 00:00:00	2023-10-24 08:10:42	2023-10-24 08:11:11
402	23	1	43	150	2023-10-17 00:00:00	2023-10-24 08:11:56	2023-10-24 08:12:07
410	28	1	26	970	2023-10-17 00:00:00	2023-10-24 08:17:26	2023-10-26 08:16:25
404	29	1	27	870	2023-10-17 00:00:00	2023-10-24 08:13:59	2023-10-24 08:14:18
370	21	1	47	205	2023-10-19 00:00:00	2023-10-24 07:20:32	2023-11-13 09:02:39
406	32	1	21	800	2023-10-17 00:00:00	2023-10-24 08:15:45	2023-10-24 08:16:24
407	32	1	32	300	2023-10-17 00:00:00	2023-10-24 08:15:45	2023-10-24 08:16:24
408	32	1	46	381	2023-10-17 00:00:00	2023-10-24 08:15:45	2023-10-24 08:16:24
409	32	1	25	850	2023-10-17 00:00:00	2023-10-24 08:15:45	2023-10-24 08:16:24
383	30	1	30	975	2023-10-16 00:00:00	2023-10-24 07:30:44	2023-10-26 08:21:17
411	28	1	29	720	2023-10-17 00:00:00	2023-10-24 08:17:26	2023-10-24 08:17:55
412	24	1	24	1050	2023-10-17 00:00:00	2023-10-24 08:19:46	2023-10-24 08:20:07
413	24	1	23	1030	2023-10-17 00:00:00	2023-10-24 08:19:46	2023-10-24 08:20:07
398	33	1	19	1300	2023-10-17 00:00:00	2023-10-24 08:09:59	2023-10-24 08:20:57
415	35	1	35	1400	2023-10-17 00:00:00	2023-10-24 08:21:55	2023-10-24 08:22:12
416	35	1	48	881	2023-10-17 00:00:00	2023-10-24 08:21:55	2023-10-24 08:22:12
417	25	1	34	1100	2023-10-16 00:00:00	2023-10-24 08:24:00	2023-10-24 08:24:45
418	25	1	43	130	2023-10-16 00:00:00	2023-10-24 08:24:00	2023-10-24 08:24:45
419	25	1	18	960	2023-10-16 00:00:00	2023-10-24 08:24:00	2023-10-24 08:24:45
420	25	1	23	30	2023-10-16 00:00:00	2023-10-24 08:24:00	2023-10-24 08:24:45
421	25	1	34	1215	2023-10-19 00:00:00	2023-10-24 08:26:33	2023-10-24 08:27:15
422	25	1	18	900	2023-10-19 00:00:00	2023-10-24 08:26:33	2023-10-24 08:27:15
403	30	1	30	1200	2023-10-17 00:00:00	2023-10-24 08:12:38	2023-10-26 08:12:50
423	25	1	34	1055	2023-10-23 00:00:00	2023-10-24 08:28:16	2023-10-24 08:28:37
424	25	1	18	950	2023-10-23 00:00:00	2023-10-24 08:28:16	2023-10-24 08:28:37
1249	32	1	25	800	2023-10-05 00:00:00	2023-11-03 09:50:14	2023-11-03 09:50:44
426	25	1	43	50	2023-10-20 00:00:00	2023-10-24 08:30:43	2023-10-24 08:31:06
427	25	1	18	960	2023-10-20 00:00:00	2023-10-24 08:30:43	2023-10-24 08:31:06
490	22	1	6	525	2023-10-24 00:00:00	2023-10-25 00:47:54	2023-11-10 08:47:51
474	22	1	6	575	2023-10-22 00:00:00	2023-10-24 09:40:02	2023-11-10 08:47:51
491	22	1	7	525	2023-10-24 00:00:00	2023-10-25 00:47:54	2023-11-10 08:48:57
431	22	1	9	475	2023-10-18 00:00:00	2023-10-24 08:34:05	2023-10-24 08:35:13
432	22	1	10	400	2023-10-18 00:00:00	2023-10-24 08:34:05	2023-10-24 08:35:13
433	32	1	21	750	2023-10-18 00:00:00	2023-10-24 08:35:50	2023-10-24 08:36:29
434	32	1	32	300	2023-10-18 00:00:00	2023-10-24 08:35:50	2023-10-24 08:36:29
435	32	1	46	400	2023-10-18 00:00:00	2023-10-24 08:35:50	2023-10-24 08:36:29
436	32	1	25	900	2023-10-18 00:00:00	2023-10-24 08:35:50	2023-10-24 08:36:29
437	29	1	27	990	2023-10-18 00:00:00	2023-10-24 08:37:37	2023-10-24 08:37:56
438	29	1	43	100	2023-10-18 00:00:00	2023-10-24 08:37:37	2023-10-24 08:37:56
439	27	1	19	2522	2023-10-18 00:00:00	2023-10-24 08:39:06	2023-10-24 08:39:18
440	33	1	19	1300	2023-10-18 00:00:00	2023-10-24 08:39:53	2023-10-24 08:40:09
499	39	3	19	750	2023-10-24 00:00:00	2023-10-25 08:02:54	2023-11-02 07:32:11
442	28	1	29	800	2023-10-18 00:00:00	2023-10-24 08:42:46	2023-10-24 08:45:34
443	31	1	22	650	2023-10-18 00:00:00	2023-10-24 08:46:45	2023-10-24 08:47:10
487	31	1	38	350	2023-10-10 00:00:00	2023-10-24 09:57:18	2023-11-15 02:19:37
470	31	1	20	900	2023-10-08 00:00:00	2023-10-24 09:35:46	2023-11-15 02:20:05
446	24	1	24	1200	2023-10-18 00:00:00	2023-10-24 08:47:42	2023-10-24 08:47:58
447	24	1	23	1150	2023-10-18 00:00:00	2023-10-24 08:47:42	2023-10-24 08:47:58
463	36	1	47	325	2023-10-18 00:00:00	2023-10-24 09:05:52	2023-11-13 09:02:39
448	26	1	30	860	2023-10-18 00:00:00	2023-10-24 08:49:03	2023-10-24 08:49:55
480	26	1	30	850	2023-10-22 00:00:00	2023-10-24 09:44:46	2023-10-24 09:44:54
441	28	1	26	1180	2023-10-18 00:00:00	2023-10-24 08:42:46	2023-10-26 08:08:43
452	25	1	43	100	2023-10-18 00:00:00	2023-10-24 08:52:58	2023-10-24 08:53:29
453	25	1	18	960	2023-10-18 00:00:00	2023-10-24 08:52:58	2023-10-24 08:53:29
454	35	1	35	1585	2023-10-18 00:00:00	2023-10-24 08:54:43	2023-10-24 08:55:01
455	35	1	48	180	2023-10-18 00:00:00	2023-10-24 08:54:43	2023-10-24 08:55:01
456	29	1	48	162	2023-10-18 00:00:00	2023-10-24 08:56:58	2023-10-24 08:57:20
462	21	1	47	198	2023-10-24 00:00:00	2023-10-24 09:03:52	2023-11-13 09:02:39
451	25	1	34	1200	2023-10-18 00:00:00	2023-10-24 08:52:58	2023-10-24 08:58:04
458	25	1	48	136	2023-10-18 00:00:00	2023-10-24 08:57:54	2023-10-24 08:58:04
459	34	1	17	1660	2023-10-18 00:00:00	2023-10-24 09:01:30	2023-10-24 09:01:49
460	34	1	43	1014	2023-10-18 00:00:00	2023-10-24 09:01:30	2023-10-24 09:01:49
461	23	1	43	1000	2023-10-18 00:00:00	2023-10-24 09:02:39	2023-10-24 09:02:48
444	31	1	38	400	2023-10-18 00:00:00	2023-10-24 08:46:45	2023-11-15 02:19:37
464	33	1	45	870	2023-10-18 00:00:00	2023-10-24 09:16:21	2023-10-24 09:16:30
449	26	1	49	2149	2023-10-18 00:00:00	2023-10-24 08:49:03	2023-10-24 09:19:08
465	21	1	49	191	2023-10-18 00:00:00	2023-10-24 09:19:44	2023-10-24 09:19:50
466	32	1	25	800	2023-10-08 00:00:00	2023-10-24 09:32:07	2023-10-24 09:32:14
467	31	1	19	470	2023-10-08 00:00:00	2023-10-24 09:33:46	2023-10-24 09:34:07
469	31	1	35	270	2023-10-08 00:00:00	2023-10-24 09:34:51	2023-10-24 09:35:06
468	31	1	23	393	2023-10-08 00:00:00	2023-10-24 09:33:46	2023-10-24 09:35:06
481	30	1	30	450	2023-10-22 00:00:00	2023-10-24 09:45:18	2023-10-24 09:45:25
471	31	1	22	600	2023-10-08 00:00:00	2023-10-24 09:36:27	2023-10-24 09:36:34
445	31	1	20	1030	2023-10-18 00:00:00	2023-10-24 08:46:45	2023-11-15 02:20:05
472	24	1	24	450	2023-10-08 00:00:00	2023-10-24 09:37:17	2023-10-24 09:37:26
473	28	1	29	193	2023-10-08 00:00:00	2023-10-24 09:37:55	2023-10-24 09:38:06
506	22	1	7	600	2023-10-25 00:00:00	2023-10-26 02:27:47	2023-11-10 08:48:57
500	28	1	58	130	2023-10-24 00:00:00	2023-10-25 08:15:18	2023-11-11 01:01:54
476	22	1	9	525	2023-10-22 00:00:00	2023-10-24 09:40:02	2023-10-24 09:40:37
478	38	3	18	409	2023-10-22 00:00:00	2023-10-24 09:41:44	2023-11-15 04:18:20
479	39	3	19	1300	2023-10-22 00:00:00	2023-10-24 09:44:04	2023-10-24 09:44:16
482	28	1	29	334	2023-10-22 00:00:00	2023-10-24 09:46:00	2023-10-24 09:46:08
483	29	1	27	216	2023-10-22 00:00:00	2023-10-24 09:47:13	2023-10-24 09:47:20
484	25	1	18	330	2023-10-22 00:00:00	2023-10-24 09:47:57	2023-10-24 09:48:04
485	31	1	22	650	2023-10-10 00:00:00	2023-10-24 09:57:18	2023-10-24 09:58:01
486	31	1	35	90	2023-10-10 00:00:00	2023-10-24 09:57:18	2023-10-24 09:58:01
489	31	1	20	1030	2023-10-10 00:00:00	2023-10-24 09:57:18	2023-11-15 02:20:05
488	31	1	45	310	2023-10-10 00:00:00	2023-10-24 09:57:18	2023-10-24 09:58:01
477	38	3	27	409	2023-10-22 00:00:00	2023-10-24 09:41:44	2023-11-15 04:18:20
428	22	1	6	525	2023-10-18 00:00:00	2023-10-24 08:34:05	2023-11-10 08:47:51
429	22	1	7	525	2023-10-18 00:00:00	2023-10-24 08:34:05	2023-11-10 08:48:57
492	22	1	8	375	2023-10-24 00:00:00	2023-10-25 00:47:54	2023-11-09 05:42:07
493	22	1	9	350	2023-10-24 00:00:00	2023-10-25 00:47:54	2023-10-25 00:49:39
494	22	1	10	375	2023-10-24 00:00:00	2023-10-25 00:47:54	2023-10-25 00:49:39
495	31	1	19	100	2023-10-24 00:00:00	2023-10-25 00:52:06	2023-10-25 00:53:23
496	23	1	32	270	2023-10-24 00:00:00	2023-10-25 00:56:00	2023-10-25 00:56:32
497	23	1	35	1500	2023-10-24 00:00:00	2023-10-25 00:56:00	2023-10-25 00:56:32
498	23	1	43	650	2023-10-24 00:00:00	2023-10-25 00:56:00	2023-10-25 00:56:32
425	25	1	34	1310	2023-10-20 00:00:00	2023-10-24 08:30:43	2023-11-03 07:12:15
504	29	1	31	1000	2023-10-24 00:00:00	2023-10-25 08:20:22	2023-11-13 08:45:44
501	29	1	26	320	2023-10-24 00:00:00	2023-10-25 08:20:22	2023-10-25 08:21:15
502	29	1	27	920	2023-10-24 00:00:00	2023-10-25 08:20:22	2023-10-25 08:21:15
503	29	1	29	100	2023-10-24 00:00:00	2023-10-25 08:20:22	2023-10-25 08:21:15
457	29	1	31	1100	2023-10-18 00:00:00	2023-10-24 08:56:58	2023-11-13 08:45:44
430	22	1	8	400	2023-10-18 00:00:00	2023-10-24 08:34:05	2023-11-09 09:24:16
475	22	1	7	575	2023-10-22 00:00:00	2023-10-24 09:40:02	2023-11-10 08:48:57
450	30	1	30	1100	2023-10-18 00:00:00	2023-10-24 08:50:28	2023-10-26 08:08:04
508	22	1	9	550	2023-10-25 00:00:00	2023-10-26 02:27:47	2023-10-26 02:29:05
509	22	1	10	500	2023-10-25 00:00:00	2023-10-26 02:27:47	2023-10-26 02:29:05
510	36	1	9	100	2023-10-25 00:00:00	2023-10-26 02:29:37	2023-10-26 02:29:52
511	24	1	24	1067	2023-10-25 00:00:00	2023-10-26 02:30:40	2023-10-26 02:30:58
512	24	1	23	1130	2023-10-25 00:00:00	2023-10-26 02:30:40	2023-10-26 02:30:58
513	31	1	22	650	2023-10-25 00:00:00	2023-10-26 02:31:58	2023-10-26 02:32:40
562	31	1	38	350	2023-10-09 00:00:00	2023-10-26 08:49:39	2023-11-15 02:19:37
515	31	1	45	300	2023-10-25 00:00:00	2023-10-26 02:31:58	2023-10-26 02:32:40
526	38	3	49	310	2023-10-25 00:00:00	2023-10-26 02:44:16	2023-11-15 04:20:30
517	29	1	27	0	2023-10-25 00:00:00	2023-10-26 02:33:18	2023-10-26 02:33:18
519	34	1	17	1650	2023-10-25 00:00:00	2023-10-26 02:37:22	2023-10-26 02:37:44
520	34	1	43	327	2023-10-25 00:00:00	2023-10-26 02:37:22	2023-10-26 02:37:44
521	23	1	35	900	2023-10-25 00:00:00	2023-10-26 02:39:07	2023-10-26 02:39:48
522	23	1	43	1300	2023-10-25 00:00:00	2023-10-26 02:39:07	2023-10-26 02:39:48
523	39	3	19	1400	2023-10-25 00:00:00	2023-10-26 02:42:58	2023-10-26 02:43:29
524	39	3	28	650	2023-10-25 00:00:00	2023-10-26 02:42:58	2023-10-26 02:43:29
537	38	3	32	177	2023-10-25 00:00:00	2023-10-26 02:54:18	2023-11-15 04:16:24
552	28	1	58	200	2023-10-19 00:00:00	2023-10-26 08:24:20	2023-11-11 01:01:54
582	28	1	47	255	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-11-13 09:02:39
529	26	1	30	427	2023-10-25 00:00:00	2023-10-26 02:46:23	2023-10-26 02:46:43
530	26	1	49	983	2023-10-25 00:00:00	2023-10-26 02:46:23	2023-10-26 02:46:43
531	33	1	28	466	2023-10-25 00:00:00	2023-10-26 02:47:13	2023-10-26 02:47:25
532	30	1	30	1441	2023-10-25 00:00:00	2023-10-26 02:47:53	2023-10-26 02:48:06
547	30	1	58	1300	2023-10-20 00:00:00	2023-10-26 08:18:28	2023-11-11 01:01:54
534	25	1	34	1000	2023-10-25 00:00:00	2023-10-26 02:49:44	2023-10-26 02:50:06
535	25	1	18	960	2023-10-25 00:00:00	2023-10-26 02:49:44	2023-10-26 02:50:06
536	21	1	32	140	2023-10-25 00:00:00	2023-10-26 02:50:34	2023-10-26 02:50:42
538	38	3	34	151	2023-10-25 00:00:00	2023-10-26 02:54:18	2023-11-15 04:16:24
527	38	3	47	392	2023-10-25 00:00:00	2023-10-26 02:44:16	2023-11-15 04:20:30
539	38	3	45	0	2023-10-25 00:00:00	2023-10-26 02:54:18	2023-10-26 02:55:41
528	29	1	47	22	2023-10-25 00:00:00	2023-10-26 02:45:32	2023-11-13 09:02:39
540	29	1	34	0	2023-10-20 00:00:00	2023-10-26 02:59:35	2023-10-26 02:59:35
545	30	1	58	1130	2023-10-17 00:00:00	2023-10-26 08:11:20	2023-11-11 01:01:54
544	21	1	58	35	2023-10-18 00:00:00	2023-10-26 08:09:13	2023-11-11 01:01:54
543	21	1	7	0	2023-10-18 00:00:00	2023-10-26 08:09:13	2023-11-10 08:48:57
541	30	1	58	1205	2023-10-18 00:00:00	2023-10-26 08:07:42	2023-11-11 01:01:54
546	28	1	58	260	2023-10-17 00:00:00	2023-10-26 08:16:16	2023-11-11 01:01:54
550	28	1	58	450	2023-10-16 00:00:00	2023-10-26 08:22:02	2023-11-11 01:01:54
548	28	1	58	250	2023-10-20 00:00:00	2023-10-26 08:19:08	2023-11-11 01:01:54
583	28	1	58	450	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-11-11 01:01:54
549	30	1	58	975	2023-10-16 00:00:00	2023-10-26 08:21:04	2023-11-11 01:01:54
542	28	1	58	300	2023-10-18 00:00:00	2023-10-26 08:08:35	2023-11-11 01:01:54
551	30	1	58	1400	2023-10-19 00:00:00	2023-10-26 08:23:37	2023-11-11 01:01:54
553	28	1	26	0	2023-10-08 00:00:00	2023-10-26 08:29:02	2023-10-26 08:29:02
554	32	1	21	700	2023-10-09 00:00:00	2023-10-26 08:33:25	2023-10-26 08:33:55
555	32	1	32	200	2023-10-09 00:00:00	2023-10-26 08:33:25	2023-10-26 08:33:55
556	32	1	46	400	2023-10-09 00:00:00	2023-10-26 08:33:25	2023-10-26 08:33:55
557	32	1	25	800	2023-10-09 00:00:00	2023-10-26 08:33:25	2023-10-26 08:33:55
558	23	1	32	200	2023-10-09 00:00:00	2023-10-26 08:35:35	2023-10-26 08:48:45
559	23	1	35	200	2023-10-09 00:00:00	2023-10-26 08:35:35	2023-10-26 08:48:45
560	31	1	19	70	2023-10-09 00:00:00	2023-10-26 08:49:39	2023-10-26 08:50:14
561	31	1	35	310	2023-10-09 00:00:00	2023-10-26 08:49:39	2023-10-26 08:50:14
563	31	1	20	930	2023-10-09 00:00:00	2023-10-26 08:49:39	2023-11-15 02:20:05
566	27	1	19	250	2023-10-09 00:00:00	2023-10-26 08:52:18	2023-10-26 08:52:27
567	27	1	45	0	2023-10-09 00:00:00	2023-10-26 08:52:18	2023-10-26 08:52:27
564	33	1	19	1400	2023-10-09 00:00:00	2023-10-26 08:51:17	2023-10-26 08:51:52
565	33	1	40	810	2023-10-09 00:00:00	2023-10-26 08:51:17	2023-10-26 08:51:52
568	29	1	27	840	2023-10-09 00:00:00	2023-10-26 08:53:20	2023-10-26 08:53:54
569	29	1	43	100	2023-10-09 00:00:00	2023-10-26 08:53:20	2023-10-26 08:53:54
570	29	1	23	95	2023-10-09 00:00:00	2023-10-26 08:53:20	2023-10-26 08:53:54
525	38	3	35	309	2023-10-25 00:00:00	2023-10-26 02:44:16	2023-11-15 04:20:30
572	25	1	34	866	2023-10-09 00:00:00	2023-10-26 08:55:16	2023-10-26 08:57:34
573	25	1	43	266	2023-10-09 00:00:00	2023-10-26 08:55:16	2023-10-26 08:57:34
574	25	1	48	109	2023-10-09 00:00:00	2023-10-26 08:55:16	2023-10-26 08:57:34
575	25	1	18	855	2023-10-09 00:00:00	2023-10-26 08:55:16	2023-10-26 08:57:34
576	25	1	23	95	2023-10-09 00:00:00	2023-10-26 08:55:16	2023-10-26 08:57:34
577	28	1	24	383	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-10-26 09:01:02
578	28	1	26	530	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-10-26 09:01:02
579	28	1	29	665	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-10-26 09:01:02
580	28	1	34	115	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-10-26 09:01:02
581	28	1	45	204	2023-10-09 00:00:00	2023-10-26 08:59:08	2023-10-26 09:01:02
514	31	1	38	400	2023-10-25 00:00:00	2023-10-26 02:31:58	2023-11-15 02:19:37
585	30	1	58	700	2023-10-09 00:00:00	2023-10-26 09:04:27	2023-11-11 01:01:54
584	30	1	30	350	2023-10-09 00:00:00	2023-10-26 09:04:27	2023-10-26 09:04:53
588	21	1	58	40	2023-10-09 00:00:00	2023-10-26 09:05:44	2023-11-11 01:01:54
586	21	1	30	100	2023-10-09 00:00:00	2023-10-26 09:05:44	2023-10-26 09:06:25
587	21	1	48	55	2023-10-09 00:00:00	2023-10-26 09:05:44	2023-10-26 09:06:25
518	29	1	31	920	2023-10-25 00:00:00	2023-10-26 02:33:18	2023-11-13 08:45:44
589	36	1	30	25	2023-10-09 00:00:00	2023-10-26 09:07:11	2023-10-26 09:07:20
590	34	1	17	46	2023-10-09 00:00:00	2023-10-26 09:07:57	2023-10-26 09:08:10
533	30	1	58	1740	2023-10-25 00:00:00	2023-10-26 02:48:36	2023-11-11 01:01:54
516	31	1	20	940	2023-10-25 00:00:00	2023-10-26 02:31:58	2023-11-15 02:20:05
505	22	1	6	600	2023-10-25 00:00:00	2023-10-26 02:27:47	2023-11-10 08:47:51
571	29	1	31	920	2023-10-09 00:00:00	2023-10-26 08:53:20	2023-11-13 08:45:44
591	24	1	22	0	2023-10-09 00:00:00	2023-10-26 09:08:46	2023-10-26 09:09:21
592	24	1	24	605	2023-10-09 00:00:00	2023-10-26 09:08:46	2023-10-26 09:09:21
593	24	1	48	109	2023-10-09 00:00:00	2023-10-26 09:08:46	2023-10-26 09:09:21
594	31	1	22	500	2023-10-09 00:00:00	2023-10-26 09:09:58	2023-10-26 09:10:10
595	29	1	34	0	2023-10-09 00:00:00	2023-10-26 09:10:44	2023-10-26 09:10:57
596	29	1	48	26	2023-10-09 00:00:00	2023-10-26 09:10:44	2023-10-26 09:10:57
597	22	1	24	0	2023-10-23 00:00:00	2023-10-26 09:17:41	2023-10-26 09:17:41
599	28	1	58	150	2023-10-23 00:00:00	2023-10-26 09:20:36	2023-11-11 01:01:54
674	21	1	58	50	2023-10-03 00:00:00	2023-10-27 04:17:43	2023-11-11 01:01:54
665	39	3	19	330	2023-10-27 00:00:00	2023-10-27 03:30:23	2023-11-03 03:54:46
601	25	1	29	100	2023-10-24 00:00:00	2023-10-26 09:30:17	2023-10-26 09:32:05
602	25	1	34	1160	2023-10-24 00:00:00	2023-10-26 09:30:17	2023-10-26 09:32:05
603	25	1	18	950	2023-10-24 00:00:00	2023-10-26 09:30:17	2023-10-26 09:32:05
614	38	3	47	174	2023-10-24 00:00:00	2023-10-26 09:35:03	2023-11-13 09:02:39
605	26	1	29	427	2023-10-24 00:00:00	2023-10-26 09:32:46	2023-10-26 09:33:20
606	26	1	49	1710	2023-10-24 00:00:00	2023-10-26 09:32:46	2023-10-26 09:33:20
616	29	1	47	15	2023-10-24 00:00:00	2023-10-26 09:40:10	2023-11-13 09:02:39
624	22	1	6	625	2023-10-26 00:00:00	2023-10-27 03:10:54	2023-11-10 08:47:51
609	21	1	49	143	2023-10-24 00:00:00	2023-10-26 09:33:56	2023-10-26 09:34:11
610	38	3	30	0	2023-10-24 00:00:00	2023-10-26 09:35:03	2023-10-26 09:37:13
611	38	3	34	0	2023-10-24 00:00:00	2023-10-26 09:35:03	2023-10-26 09:37:13
612	38	3	45	0	2023-10-24 00:00:00	2023-10-26 09:35:03	2023-10-26 09:37:13
613	38	3	49	0	2023-10-24 00:00:00	2023-10-26 09:35:03	2023-10-26 09:37:13
666	39	3	38	0	2023-10-27 00:00:00	2023-10-27 03:30:23	2023-11-15 02:19:37
615	29	1	34	0	2023-10-24 00:00:00	2023-10-26 09:40:10	2023-10-26 09:40:26
604	25	1	47	15	2023-10-24 00:00:00	2023-10-26 09:30:17	2023-11-13 09:02:39
617	34	1	17	1600	2023-10-24 00:00:00	2023-10-26 09:43:14	2023-10-26 09:43:57
618	34	1	43	1282	2023-10-24 00:00:00	2023-10-26 09:43:14	2023-10-26 09:43:57
619	28	1	26	1200	2023-10-26 00:00:00	2023-10-27 03:07:18	2023-10-27 03:09:51
620	28	1	29	864	2023-10-26 00:00:00	2023-10-27 03:07:18	2023-10-27 03:09:51
621	28	1	35	315	2023-10-26 00:00:00	2023-10-27 03:07:18	2023-10-27 03:09:51
622	28	1	49	83	2023-10-26 00:00:00	2023-10-27 03:07:18	2023-10-27 03:09:51
598	30	1	58	1450	2023-10-23 00:00:00	2023-10-26 09:19:59	2023-11-11 01:01:54
628	36	1	6	100	2023-10-26 00:00:00	2023-10-27 03:12:53	2023-11-10 08:47:51
623	28	1	58	950	2023-10-26 00:00:00	2023-10-27 03:07:18	2023-11-11 01:01:54
625	22	1	7	625	2023-10-26 00:00:00	2023-10-27 03:10:54	2023-11-10 08:48:57
627	22	1	10	400	2023-10-26 00:00:00	2023-10-27 03:10:54	2023-10-27 03:11:50
629	36	1	7	100	2023-10-26 00:00:00	2023-10-27 03:12:53	2023-11-10 08:48:57
608	21	1	7	0	2023-10-24 00:00:00	2023-10-26 09:33:56	2023-11-10 08:48:57
630	36	1	8	125	2023-10-26 00:00:00	2023-10-27 03:12:53	2023-10-27 03:13:26
631	36	1	10	125	2023-10-26 00:00:00	2023-10-27 03:12:53	2023-10-27 03:13:26
632	29	1	27	970	2023-10-26 00:00:00	2023-10-27 03:14:23	2023-10-27 03:15:13
652	25	1	47	15	2023-10-26 00:00:00	2023-10-27 03:24:36	2023-11-13 09:02:39
634	31	1	22	670	2023-10-26 00:00:00	2023-10-27 03:16:07	2023-10-27 03:17:04
635	31	1	26	70	2023-10-26 00:00:00	2023-10-27 03:16:07	2023-10-27 03:17:04
637	31	1	20	1000	2023-10-26 00:00:00	2023-10-27 03:16:07	2023-11-15 02:20:05
638	32	1	21	800	2023-10-26 00:00:00	2023-10-27 03:17:45	2023-10-27 03:18:47
639	32	1	32	400	2023-10-26 00:00:00	2023-10-27 03:17:45	2023-10-27 03:18:47
640	32	1	46	500	2023-10-26 00:00:00	2023-10-27 03:17:45	2023-10-27 03:18:47
641	32	1	25	1000	2023-10-26 00:00:00	2023-10-27 03:17:45	2023-10-27 03:18:47
642	24	1	24	1100	2023-10-26 00:00:00	2023-10-27 03:19:25	2023-10-27 03:19:50
643	24	1	23	1120	2023-10-26 00:00:00	2023-10-27 03:19:25	2023-10-27 03:19:50
644	23	1	35	620	2023-10-26 00:00:00	2023-10-27 03:21:26	2023-10-27 03:22:02
645	23	1	43	860	2023-10-26 00:00:00	2023-10-27 03:21:26	2023-10-27 03:22:02
646	34	1	17	1033	2023-10-26 00:00:00	2023-10-27 03:22:29	2023-10-27 03:22:45
647	34	1	43	100	2023-10-26 00:00:00	2023-10-27 03:22:29	2023-10-27 03:22:45
648	36	1	17	100	2023-10-26 00:00:00	2023-10-27 03:23:18	2023-10-27 03:23:31
649	25	1	30	31	2023-10-26 00:00:00	2023-10-27 03:24:36	2023-10-27 03:25:34
650	25	1	34	1022	2023-10-26 00:00:00	2023-10-27 03:24:36	2023-10-27 03:25:34
651	25	1	18	900	2023-10-26 00:00:00	2023-10-27 03:24:36	2023-10-27 03:25:34
669	29	1	47	98	2023-10-26 00:00:00	2023-10-27 03:31:01	2023-11-13 09:02:39
653	26	1	30	1300	2023-10-26 00:00:00	2023-10-27 03:26:01	2023-10-27 03:26:24
654	26	1	49	330	2023-10-26 00:00:00	2023-10-27 03:26:01	2023-10-27 03:26:24
655	21	1	49	230	2023-10-26 00:00:00	2023-10-27 03:26:50	2023-10-27 03:27:03
656	27	1	19	2900	2023-10-26 00:00:00	2023-10-27 03:27:43	2023-10-27 03:28:06
657	27	1	28	855	2023-10-26 00:00:00	2023-10-27 03:27:43	2023-10-27 03:28:06
658	33	1	19	1300	2023-10-26 00:00:00	2023-10-27 03:28:52	2023-10-27 03:29:17
659	33	1	28	1330	2023-10-26 00:00:00	2023-10-27 03:28:52	2023-10-27 03:29:17
660	38	3	30	0	2023-10-26 00:00:00	2023-10-27 03:29:47	2023-10-27 03:30:05
661	38	3	34	0	2023-10-26 00:00:00	2023-10-27 03:29:47	2023-10-27 03:30:05
662	38	3	45	0	2023-10-26 00:00:00	2023-10-27 03:29:47	2023-10-27 03:30:05
663	38	3	49	0	2023-10-26 00:00:00	2023-10-27 03:29:47	2023-10-27 03:30:05
607	26	1	47	588	2023-10-24 00:00:00	2023-10-26 09:32:46	2023-11-13 09:02:39
667	39	3	28	140	2023-10-27 00:00:00	2023-10-27 03:30:23	2023-11-03 03:54:46
636	31	1	38	400	2023-10-26 00:00:00	2023-10-27 03:16:07	2023-11-15 02:19:37
668	29	1	34	0	2023-10-26 00:00:00	2023-10-27 03:31:01	2023-10-27 03:31:12
664	38	3	47	337	2023-10-26 00:00:00	2023-10-27 03:29:47	2023-11-13 09:02:39
670	21	1	17	150	2023-10-03 00:00:00	2023-10-27 04:17:43	2023-10-27 04:20:14
671	21	1	30	0	2023-10-03 00:00:00	2023-10-27 04:17:43	2023-10-27 04:20:14
672	21	1	49	130	2023-10-03 00:00:00	2023-10-27 04:17:43	2023-10-27 04:20:14
673	21	1	23	75	2023-10-03 00:00:00	2023-10-27 04:17:43	2023-10-27 04:20:14
633	29	1	31	950	2023-10-26 00:00:00	2023-10-27 03:14:23	2023-11-13 08:45:44
1253	31	1	22	600	2023-10-05 00:00:00	2023-11-03 09:57:49	2023-11-03 09:58:30
600	30	1	30	1000	2023-10-24 00:00:00	2023-10-26 09:28:24	2023-11-02 07:29:45
675	31	1	22	550	2023-10-03 00:00:00	2023-10-27 04:26:26	2023-10-27 04:26:48
681	28	1	26	1100	2023-10-03 00:00:00	2023-10-27 07:21:40	2023-11-02 07:59:21
677	32	1	21	750	2023-10-03 00:00:00	2023-10-27 04:27:37	2023-10-27 04:28:21
678	32	1	32	60	2023-10-03 00:00:00	2023-10-27 04:27:37	2023-10-27 04:28:21
679	32	1	46	380	2023-10-03 00:00:00	2023-10-27 04:27:37	2023-10-27 04:28:21
680	32	1	25	800	2023-10-03 00:00:00	2023-10-27 04:27:37	2023-10-27 04:28:21
1250	33	1	19	1300	2023-10-05 00:00:00	2023-11-03 09:51:26	2023-11-03 09:51:49
682	28	1	29	560	2023-10-03 00:00:00	2023-10-27 07:21:40	2023-10-27 07:22:47
715	25	1	47	121	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-13 09:02:39
720	30	1	58	1055	2023-10-02 00:00:00	2023-11-02 05:39:19	2023-11-11 01:01:54
685	31	1	22	550	2023-10-02 00:00:00	2023-11-02 05:19:58	2023-11-02 05:20:23
676	31	1	20	850	2023-10-03 00:00:00	2023-10-27 04:26:26	2023-11-15 02:20:05
731	31	1	20	1010	2023-10-13 00:00:00	2023-11-02 05:48:55	2023-11-15 02:20:05
688	28	1	26	0	2023-11-02 00:00:00	2023-11-02 05:21:00	2023-11-02 05:21:00
689	28	1	29	0	2023-11-02 00:00:00	2023-11-02 05:21:00	2023-11-02 05:21:00
716	33	1	19	1300	2023-10-02 00:00:00	2023-11-02 05:37:13	2023-11-02 05:37:31
692	28	1	29	600	2023-10-02 00:00:00	2023-11-02 05:21:43	2023-11-02 05:22:09
735	29	1	31	1000	2023-10-13 00:00:00	2023-11-02 05:51:36	2023-11-13 08:45:44
694	26	1	30	875	2023-10-02 00:00:00	2023-11-02 05:22:55	2023-11-02 05:23:31
695	26	1	49	1000	2023-10-02 00:00:00	2023-11-02 05:22:55	2023-11-02 05:23:31
730	31	1	38	400	2023-10-13 00:00:00	2023-11-02 05:48:55	2023-11-15 02:19:37
691	28	1	26	1100	2023-10-02 00:00:00	2023-11-02 05:21:43	2023-11-02 05:24:10
696	26	1	47	175	2023-10-02 00:00:00	2023-11-02 05:22:55	2023-11-13 09:02:39
698	32	1	21	750	2023-10-02 00:00:00	2023-11-02 05:24:50	2023-11-02 05:25:50
699	32	1	32	50	2023-10-02 00:00:00	2023-11-02 05:24:50	2023-11-02 05:25:50
700	32	1	46	340	2023-10-02 00:00:00	2023-11-02 05:24:50	2023-11-02 05:25:50
701	32	1	25	800	2023-10-02 00:00:00	2023-11-02 05:24:50	2023-11-02 05:25:50
702	29	1	27	850	2023-10-02 00:00:00	2023-11-02 05:26:49	2023-11-02 05:27:18
703	29	1	43	100	2023-10-02 00:00:00	2023-11-02 05:26:49	2023-11-02 05:27:18
683	28	1	47	150	2023-10-03 00:00:00	2023-10-27 07:21:40	2023-11-13 09:02:39
705	24	1	24	950	2023-10-02 00:00:00	2023-11-02 05:28:16	2023-11-02 05:29:04
706	24	1	35	80	2023-10-02 00:00:00	2023-11-02 05:28:16	2023-11-02 05:29:04
707	24	1	48	133	2023-10-02 00:00:00	2023-11-02 05:28:16	2023-11-02 05:29:04
708	24	1	23	1080	2023-10-02 00:00:00	2023-11-02 05:28:16	2023-11-02 05:29:04
709	25	1	32	30	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-02 05:34:33
710	25	1	34	1165	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-02 05:34:33
711	25	1	43	100	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-02 05:34:33
712	25	1	45	16	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-02 05:34:33
713	25	1	48	133	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-02 05:34:33
714	25	1	18	780	2023-10-02 00:00:00	2023-11-02 05:32:05	2023-11-02 05:34:33
697	28	1	47	38	2023-10-02 00:00:00	2023-11-02 05:24:00	2023-11-13 09:02:39
717	33	1	40	710	2023-10-02 00:00:00	2023-11-02 05:37:13	2023-11-02 05:37:31
718	27	1	19	1925	2023-10-02 00:00:00	2023-11-02 05:37:58	2023-11-02 05:38:12
719	30	1	30	1200	2023-10-02 00:00:00	2023-11-02 05:39:19	2023-11-02 05:39:38
693	28	1	58	320	2023-10-02 00:00:00	2023-11-02 05:21:43	2023-11-11 01:01:54
721	23	1	32	750	2023-10-02 00:00:00	2023-11-02 05:41:15	2023-11-02 05:41:36
722	23	1	35	1280	2023-10-02 00:00:00	2023-11-02 05:41:15	2023-11-02 05:41:36
723	34	1	17	1432	2023-10-02 00:00:00	2023-11-02 05:42:04	2023-11-02 05:42:23
724	34	1	43	1200	2023-10-02 00:00:00	2023-11-02 05:42:04	2023-11-02 05:42:23
725	25	1	34	1215	2023-10-13 00:00:00	2023-11-02 05:47:33	2023-11-02 05:48:07
726	25	1	45	40	2023-10-13 00:00:00	2023-11-02 05:47:33	2023-11-02 05:48:07
727	25	1	18	950	2023-10-13 00:00:00	2023-11-02 05:47:33	2023-11-02 05:48:07
728	31	1	22	650	2023-10-13 00:00:00	2023-11-02 05:48:55	2023-11-02 05:49:53
729	31	1	34	48	2023-10-13 00:00:00	2023-11-02 05:48:55	2023-11-02 05:49:53
686	31	1	38	250	2023-10-02 00:00:00	2023-11-02 05:19:58	2023-11-15 02:19:37
733	29	1	27	1000	2023-10-13 00:00:00	2023-11-02 05:51:36	2023-11-02 05:52:05
732	31	1	45	70	2023-10-13 00:00:00	2023-11-02 05:50:18	2023-11-02 05:50:26
687	31	1	20	800	2023-10-02 00:00:00	2023-11-02 05:19:58	2023-11-15 02:20:05
734	29	1	49	85	2023-10-13 00:00:00	2023-11-02 05:51:36	2023-11-02 05:52:05
704	29	1	31	1000	2023-10-02 00:00:00	2023-11-02 05:26:49	2023-11-13 08:45:44
736	26	1	30	855	2023-10-13 00:00:00	2023-11-02 05:52:31	2023-11-02 05:52:48
737	26	1	49	1476	2023-10-13 00:00:00	2023-11-02 05:52:31	2023-11-02 05:52:48
684	28	1	58	334	2023-10-03 00:00:00	2023-10-27 07:21:40	2023-11-11 01:01:54
739	32	1	21	800	2023-10-13 00:00:00	2023-11-02 05:53:56	2023-11-02 05:54:37
740	32	1	32	250	2023-10-13 00:00:00	2023-11-02 05:53:56	2023-11-02 05:54:37
741	32	1	46	350	2023-10-13 00:00:00	2023-11-02 05:53:56	2023-11-02 05:54:37
742	32	1	25	800	2023-10-13 00:00:00	2023-11-02 05:53:56	2023-11-02 05:54:37
738	30	1	30	1100	2023-10-13 00:00:00	2023-11-02 05:53:12	2023-11-02 05:55:13
747	28	1	58	365	2023-10-13 00:00:00	2023-11-02 05:55:52	2023-11-11 01:01:54
744	28	1	26	1180	2023-10-13 00:00:00	2023-11-02 05:55:52	2023-11-02 05:56:27
745	28	1	29	685	2023-10-13 00:00:00	2023-11-02 05:55:52	2023-11-02 05:56:27
746	28	1	45	150	2023-10-13 00:00:00	2023-11-02 05:55:52	2023-11-02 05:56:27
748	27	1	19	1365	2023-10-13 00:00:00	2023-11-02 05:57:02	2023-11-02 05:57:16
749	33	1	19	1100	2023-10-13 00:00:00	2023-11-02 05:57:42	2023-11-02 05:58:05
750	33	1	40	1050	2023-10-13 00:00:00	2023-11-02 05:57:42	2023-11-02 05:58:05
751	24	1	24	1130	2023-10-13 00:00:00	2023-11-02 05:58:49	2023-11-02 05:59:13
752	24	1	35	10	2023-10-13 00:00:00	2023-11-02 05:58:49	2023-11-02 05:59:13
753	24	1	23	1120	2023-10-13 00:00:00	2023-11-02 05:58:49	2023-11-02 05:59:13
754	34	1	17	1500	2023-10-13 00:00:00	2023-11-02 05:59:49	2023-11-02 06:00:10
755	34	1	43	1506	2023-10-13 00:00:00	2023-11-02 05:59:49	2023-11-02 06:00:10
756	23	1	35	1650	2023-10-13 00:00:00	2023-11-02 06:00:53	2023-11-02 06:01:19
757	23	1	43	700	2023-10-13 00:00:00	2023-11-02 06:00:53	2023-11-02 06:01:19
758	23	1	45	375	2023-10-13 00:00:00	2023-11-02 06:00:53	2023-11-02 06:01:19
743	30	1	58	1105	2023-10-13 00:00:00	2023-11-02 05:55:01	2023-11-11 01:01:54
766	36	1	7	338	2023-10-31 00:00:00	2023-11-02 06:10:34	2023-11-10 08:48:57
760	22	1	7	425	2023-10-31 00:00:00	2023-11-02 06:06:30	2023-11-10 08:48:57
762	22	1	9	475	2023-10-31 00:00:00	2023-11-02 06:06:30	2023-11-02 06:09:47
763	22	1	10	250	2023-10-31 00:00:00	2023-11-02 06:06:30	2023-11-02 06:09:47
782	26	1	38	350	2023-10-31 00:00:00	2023-11-02 06:17:14	2023-11-15 02:19:37
765	36	1	6	337	2023-10-31 00:00:00	2023-11-02 06:10:34	2023-11-10 08:47:51
785	30	1	58	700	2023-10-31 00:00:00	2023-11-02 06:18:10	2023-11-11 01:01:54
767	36	1	8	350	2023-10-31 00:00:00	2023-11-02 06:10:34	2023-11-02 06:12:05
768	36	1	9	200	2023-10-31 00:00:00	2023-11-02 06:10:34	2023-11-02 06:12:05
769	36	1	10	350	2023-10-31 00:00:00	2023-11-02 06:10:34	2023-11-02 06:12:05
770	33	1	19	1062	2023-10-31 00:00:00	2023-11-02 06:12:43	2023-11-02 06:13:19
771	33	1	28	905	2023-10-31 00:00:00	2023-11-02 06:12:43	2023-11-02 06:13:19
772	27	1	19	702	2023-10-31 00:00:00	2023-11-02 06:13:54	2023-11-02 06:14:13
773	27	1	28	702	2023-10-31 00:00:00	2023-11-02 06:13:54	2023-11-02 06:14:13
774	32	1	21	430	2023-10-31 00:00:00	2023-11-02 06:14:44	2023-11-02 06:15:27
777	32	1	25	600	2023-10-31 00:00:00	2023-11-02 06:14:44	2023-11-15 03:05:21
776	32	1	46	270	2023-10-31 00:00:00	2023-11-02 06:14:44	2023-11-02 06:15:27
778	31	1	22	433	2023-10-31 00:00:00	2023-11-02 06:16:14	2023-11-02 06:16:39
828	31	1	38	340	2023-10-12 00:00:00	2023-11-02 06:45:29	2023-11-15 02:19:37
775	32	1	32	260	2023-10-31 00:00:00	2023-11-02 06:14:44	2023-11-15 03:05:21
781	26	1	30	350	2023-10-31 00:00:00	2023-11-02 06:17:14	2023-11-02 06:17:46
779	31	1	38	267	2023-10-31 00:00:00	2023-11-02 06:16:14	2023-11-15 02:19:37
783	26	1	49	702	2023-10-31 00:00:00	2023-11-02 06:17:14	2023-11-02 06:17:46
784	30	1	30	700	2023-10-31 00:00:00	2023-11-02 06:18:10	2023-11-02 06:18:26
790	21	1	58	160	2023-10-31 00:00:00	2023-11-02 06:19:58	2023-11-11 01:01:54
786	28	1	26	790	2023-10-31 00:00:00	2023-11-02 06:19:03	2023-11-02 06:19:28
787	28	1	29	769	2023-10-31 00:00:00	2023-11-02 06:19:03	2023-11-02 06:19:28
838	30	1	58	1055	2023-10-12 00:00:00	2023-11-02 06:48:33	2023-11-11 01:01:54
789	21	1	49	333	2023-10-31 00:00:00	2023-11-02 06:19:58	2023-11-02 06:20:14
788	28	1	58	50	2023-10-31 00:00:00	2023-11-02 06:19:03	2023-11-11 01:01:54
791	24	1	24	652	2023-10-31 00:00:00	2023-11-02 06:21:10	2023-11-02 06:21:26
793	25	1	34	602	2023-10-31 00:00:00	2023-11-02 06:22:16	2023-11-02 06:22:50
794	25	1	43	20	2023-10-31 00:00:00	2023-11-02 06:22:16	2023-11-02 06:22:50
795	25	1	45	100	2023-10-31 00:00:00	2023-11-02 06:22:16	2023-11-02 06:22:50
796	25	1	18	610	2023-10-31 00:00:00	2023-11-02 06:22:16	2023-11-02 06:22:50
797	29	1	27	630	2023-10-31 00:00:00	2023-11-02 06:23:42	2023-11-02 06:24:17
798	29	1	43	20	2023-10-31 00:00:00	2023-11-02 06:23:42	2023-11-02 06:24:17
799	29	1	45	320	2023-10-31 00:00:00	2023-11-02 06:23:42	2023-11-02 06:24:17
822	29	1	31	1050	2023-10-12 00:00:00	2023-11-02 06:41:51	2023-11-13 08:45:44
801	34	1	17	1085	2023-10-31 00:00:00	2023-11-02 06:24:56	2023-11-02 06:25:18
802	34	1	43	351	2023-10-31 00:00:00	2023-11-02 06:24:56	2023-11-02 06:25:18
803	23	1	35	652	2023-10-31 00:00:00	2023-11-02 06:26:03	2023-11-02 06:26:55
804	23	1	43	596	2023-10-31 00:00:00	2023-11-02 06:26:03	2023-11-02 06:26:55
805	23	1	45	100	2023-10-31 00:00:00	2023-11-02 06:26:03	2023-11-02 06:26:55
806	23	1	23	45	2023-10-31 00:00:00	2023-11-02 06:26:03	2023-11-02 06:26:55
807	21	1	17	56	2023-10-31 00:00:00	2023-11-02 06:27:34	2023-11-02 06:27:58
808	21	1	35	65	2023-10-31 00:00:00	2023-11-02 06:27:34	2023-11-02 06:27:58
809	21	1	23	30	2023-10-31 00:00:00	2023-11-02 06:27:34	2023-11-02 06:27:58
810	24	1	45	100	2023-10-31 00:00:00	2023-11-02 06:28:18	2023-11-02 06:28:30
792	24	1	23	652	2023-10-31 00:00:00	2023-11-02 06:21:10	2023-11-02 06:28:30
811	27	1	19	2500	2023-10-12 00:00:00	2023-11-02 06:34:57	2023-11-02 06:35:09
812	33	1	19	1050	2023-10-12 00:00:00	2023-11-02 06:35:41	2023-11-02 06:36:31
813	33	1	40	1020	2023-10-12 00:00:00	2023-11-02 06:36:25	2023-11-02 06:36:31
814	24	1	24	1100	2023-10-12 00:00:00	2023-11-02 06:37:34	2023-11-02 06:38:03
815	24	1	35	40	2023-10-12 00:00:00	2023-11-02 06:37:34	2023-11-02 06:38:03
1251	33	1	40	820	2023-10-05 00:00:00	2023-11-03 09:51:26	2023-11-03 09:51:49
817	25	1	34	1200	2023-10-12 00:00:00	2023-11-02 06:38:46	2023-11-02 06:39:18
818	25	1	45	70	2023-10-12 00:00:00	2023-11-02 06:38:46	2023-11-02 06:39:18
819	25	1	18	850	2023-10-12 00:00:00	2023-11-02 06:38:46	2023-11-02 06:39:18
820	29	1	27	970	2023-10-12 00:00:00	2023-11-02 06:41:51	2023-11-02 06:42:19
821	29	1	45	160	2023-10-12 00:00:00	2023-11-02 06:41:51	2023-11-02 06:42:19
764	22	1	47	400	2023-10-31 00:00:00	2023-11-02 06:06:30	2023-11-13 09:02:39
823	23	1	35	1672	2023-10-12 00:00:00	2023-11-02 06:44:11	2023-11-02 06:44:47
824	23	1	43	200	2023-10-12 00:00:00	2023-11-02 06:44:11	2023-11-02 06:44:47
825	23	1	45	730	2023-10-12 00:00:00	2023-11-02 06:44:11	2023-11-02 06:44:47
826	23	1	23	45	2023-10-12 00:00:00	2023-11-02 06:44:11	2023-11-02 06:44:47
827	31	1	22	600	2023-10-12 00:00:00	2023-11-02 06:45:29	2023-11-02 06:45:57
829	31	1	20	1065	2023-10-12 00:00:00	2023-11-02 06:45:29	2023-11-15 02:20:05
780	31	1	20	702	2023-10-31 00:00:00	2023-11-02 06:16:14	2023-11-15 02:20:05
830	32	1	21	750	2023-10-12 00:00:00	2023-11-02 06:46:25	2023-11-02 06:47:02
831	32	1	32	300	2023-10-12 00:00:00	2023-11-02 06:46:25	2023-11-02 06:47:02
832	32	1	46	340	2023-10-12 00:00:00	2023-11-02 06:46:25	2023-11-02 06:47:02
833	32	1	25	850	2023-10-12 00:00:00	2023-11-02 06:46:25	2023-11-02 06:47:02
834	28	1	26	1150	2023-10-12 00:00:00	2023-11-02 06:47:42	2023-11-02 06:48:06
835	28	1	29	650	2023-10-12 00:00:00	2023-11-02 06:47:42	2023-11-02 06:48:06
800	29	1	31	432	2023-10-31 00:00:00	2023-11-02 06:23:42	2023-11-13 08:45:44
837	30	1	30	1400	2023-10-12 00:00:00	2023-11-02 06:48:33	2023-11-02 06:48:51
836	28	1	58	370	2023-10-12 00:00:00	2023-11-02 06:47:42	2023-11-11 01:01:54
839	26	1	43	855	2023-10-12 00:00:00	2023-11-02 06:49:22	2023-11-02 06:49:46
840	26	1	49	1971	2023-10-12 00:00:00	2023-11-02 06:49:22	2023-11-02 06:49:46
841	34	1	17	1490	2023-10-12 00:00:00	2023-11-02 06:50:14	2023-11-02 06:50:30
842	34	1	43	1421	2023-10-12 00:00:00	2023-11-02 06:50:14	2023-11-02 06:50:30
759	22	1	6	425	2023-10-31 00:00:00	2023-11-02 06:06:30	2023-11-10 08:47:51
816	24	1	23	1080	2023-10-12 00:00:00	2023-11-02 06:37:34	2023-11-02 06:51:07
843	24	1	43	100	2023-10-12 00:00:00	2023-11-02 06:50:57	2023-11-02 06:51:07
844	33	1	19	1074	2023-10-11 00:00:00	2023-11-02 06:56:07	2023-11-02 06:56:27
845	33	1	40	1050	2023-10-11 00:00:00	2023-11-02 06:56:07	2023-11-02 06:56:27
846	27	1	19	2284	2023-10-11 00:00:00	2023-11-02 06:57:09	2023-11-02 06:57:20
847	28	1	26	1180	2023-10-11 00:00:00	2023-11-02 06:57:54	2023-11-02 06:58:22
848	28	1	29	750	2023-10-11 00:00:00	2023-11-02 06:57:54	2023-11-02 06:58:22
849	28	1	49	60	2023-10-11 00:00:00	2023-11-02 06:57:54	2023-11-02 06:58:22
854	30	1	58	1016	2023-10-11 00:00:00	2023-11-02 06:59:38	2023-11-11 01:01:54
882	31	1	28	52	2023-10-24 00:00:00	2023-11-02 07:28:42	2023-11-02 07:28:59
852	26	1	49	792	2023-10-11 00:00:00	2023-11-02 06:58:52	2023-11-02 06:59:15
853	30	1	30	1000	2023-10-11 00:00:00	2023-11-02 06:59:38	2023-11-02 06:59:56
919	30	1	58	877	2023-10-03 00:00:00	2023-11-02 07:55:14	2023-11-11 01:01:54
855	32	1	21	800	2023-10-11 00:00:00	2023-11-02 07:00:28	2023-11-02 07:01:01
856	32	1	32	160	2023-10-11 00:00:00	2023-11-02 07:00:28	2023-11-02 07:01:01
857	32	1	46	290	2023-10-11 00:00:00	2023-11-02 07:00:28	2023-11-02 07:01:01
858	32	1	25	900	2023-10-11 00:00:00	2023-11-02 07:00:28	2023-11-02 07:01:01
859	29	1	27	1000	2023-10-11 00:00:00	2023-11-02 07:02:14	2023-11-02 07:02:42
860	29	1	45	185	2023-10-11 00:00:00	2023-11-02 07:02:14	2023-11-02 07:02:42
909	29	1	31	1000	2023-10-03 00:00:00	2023-11-02 07:47:48	2023-11-13 08:45:44
862	24	1	24	1150	2023-10-11 00:00:00	2023-11-02 07:03:28	2023-11-02 07:03:52
863	24	1	45	185	2023-10-11 00:00:00	2023-11-02 07:03:28	2023-11-02 07:03:52
864	24	1	23	1050	2023-10-11 00:00:00	2023-11-02 07:03:28	2023-11-02 07:03:52
865	23	1	35	1010	2023-10-11 00:00:00	2023-11-02 07:06:24	2023-11-02 07:07:18
867	23	1	45	200	2023-10-11 00:00:00	2023-11-02 07:06:24	2023-11-02 07:07:18
868	23	1	23	80	2023-10-11 00:00:00	2023-11-02 07:06:24	2023-11-02 07:07:18
869	31	1	22	700	2023-10-11 00:00:00	2023-11-02 07:08:02	2023-11-02 07:08:37
870	31	1	35	100	2023-10-11 00:00:00	2023-11-02 07:08:02	2023-11-02 07:08:37
926	31	1	38	230	2023-10-03 00:00:00	2023-11-02 07:58:26	2023-11-15 02:19:37
872	31	1	20	1060	2023-10-11 00:00:00	2023-11-02 07:08:02	2023-11-15 02:20:05
873	23	1	32	600	2023-10-11 00:00:00	2023-11-02 07:09:23	2023-11-02 07:09:35
866	23	1	43	400	2023-10-11 00:00:00	2023-11-02 07:06:24	2023-11-02 07:09:35
874	25	1	34	1150	2023-10-11 00:00:00	2023-11-02 07:10:23	2023-11-02 07:10:50
875	25	1	45	185	2023-10-11 00:00:00	2023-11-02 07:10:23	2023-11-02 07:10:50
876	25	1	18	950	2023-10-11 00:00:00	2023-11-02 07:10:23	2023-11-02 07:10:50
877	34	1	17	1000	2023-10-11 00:00:00	2023-11-02 07:11:17	2023-11-02 07:11:34
878	34	1	43	1000	2023-10-11 00:00:00	2023-11-02 07:11:17	2023-11-02 07:11:34
851	26	1	30	772	2023-10-11 00:00:00	2023-11-02 06:58:52	2023-11-02 07:12:17
879	26	1	43	396	2023-10-11 00:00:00	2023-11-02 07:12:00	2023-11-02 07:12:17
880	24	1	24	1140	2023-10-24 00:00:00	2023-11-02 07:27:46	2023-11-02 07:28:07
881	24	1	23	1140	2023-10-24 00:00:00	2023-11-02 07:27:46	2023-11-02 07:28:07
850	28	1	58	400	2023-10-11 00:00:00	2023-11-02 06:57:54	2023-11-11 01:01:54
884	33	1	19	0	2023-10-24 00:00:00	2023-11-02 07:30:14	2023-11-02 07:30:14
885	33	1	28	300	2023-10-24 00:00:00	2023-11-02 07:30:14	2023-11-02 07:31:16
871	31	1	38	360	2023-10-11 00:00:00	2023-11-02 07:08:02	2023-11-15 02:19:37
887	39	3	28	450	2023-10-24 00:00:00	2023-11-02 07:31:42	2023-11-02 07:32:11
888	32	1	21	165	2023-10-29 00:00:00	2023-11-02 07:34:06	2023-11-02 07:34:28
889	32	1	46	200	2023-10-29 00:00:00	2023-11-02 07:34:06	2023-11-02 07:34:28
890	21	1	46	45	2023-10-29 00:00:00	2023-11-02 07:35:08	2023-11-02 07:35:20
898	22	1	7	75	2023-10-29 00:00:00	2023-11-02 07:39:32	2023-11-10 08:48:57
897	22	1	6	75	2023-10-29 00:00:00	2023-11-02 07:39:32	2023-11-10 08:47:51
893	36	1	8	525	2023-10-29 00:00:00	2023-11-02 07:36:25	2023-11-02 07:37:53
894	36	1	10	525	2023-10-29 00:00:00	2023-11-02 07:36:25	2023-11-02 07:37:53
922	26	1	47	351	2023-10-03 00:00:00	2023-11-02 07:56:07	2023-11-13 09:02:39
896	36	1	9	700	2023-10-29 00:00:00	2023-11-02 07:38:17	2023-11-02 07:38:57
891	36	1	6	625	2023-10-29 00:00:00	2023-11-02 07:36:25	2023-11-10 08:47:51
883	30	1	58	1315	2023-10-24 00:00:00	2023-11-02 07:29:37	2023-11-11 01:01:54
899	22	1	8	75	2023-10-29 00:00:00	2023-11-02 07:39:32	2023-11-02 07:40:24
900	22	1	9	150	2023-10-29 00:00:00	2023-11-02 07:39:32	2023-11-02 07:40:24
901	22	1	10	75	2023-10-29 00:00:00	2023-11-02 07:39:32	2023-11-02 07:40:24
902	33	1	19	1500	2023-10-03 00:00:00	2023-11-02 07:44:40	2023-11-02 07:45:02
903	33	1	40	800	2023-10-03 00:00:00	2023-11-02 07:44:40	2023-11-02 07:45:02
904	27	1	19	1400	2023-10-03 00:00:00	2023-11-02 07:45:39	2023-11-02 07:46:46
905	27	1	45	600	2023-10-03 00:00:00	2023-11-02 07:45:39	2023-11-02 07:46:46
906	29	1	27	870	2023-10-03 00:00:00	2023-11-02 07:47:48	2023-11-02 07:48:28
907	29	1	43	170	2023-10-03 00:00:00	2023-11-02 07:47:48	2023-11-02 07:48:28
908	29	1	45	90	2023-10-03 00:00:00	2023-11-02 07:47:48	2023-11-02 07:48:28
895	36	1	47	475	2023-10-29 00:00:00	2023-11-02 07:36:25	2023-11-13 09:02:39
910	29	1	35	195	2023-10-03 00:00:00	2023-11-02 07:50:51	2023-11-02 07:50:59
911	24	1	24	900	2023-10-03 00:00:00	2023-11-02 07:51:48	2023-11-02 07:52:44
912	24	1	35	15	2023-10-03 00:00:00	2023-11-02 07:51:48	2023-11-02 07:52:44
913	24	1	48	187	2023-10-03 00:00:00	2023-11-02 07:51:48	2023-11-02 07:52:44
914	24	1	23	980	2023-10-03 00:00:00	2023-11-02 07:51:48	2023-11-02 07:52:44
916	25	1	48	187	2023-10-03 00:00:00	2023-11-02 07:53:15	2023-11-02 07:53:54
917	25	1	18	850	2023-10-03 00:00:00	2023-11-02 07:53:15	2023-11-02 07:53:54
918	30	1	30	875	2023-10-03 00:00:00	2023-11-02 07:55:14	2023-11-02 07:55:34
861	29	1	31	1000	2023-10-11 00:00:00	2023-11-02 07:02:14	2023-11-13 08:45:44
920	26	1	30	350	2023-10-03 00:00:00	2023-11-02 07:56:07	2023-11-02 07:56:34
921	26	1	49	989	2023-10-03 00:00:00	2023-11-02 07:56:07	2023-11-02 07:56:34
886	39	3	38	0	2023-10-24 00:00:00	2023-11-02 07:31:42	2023-11-15 02:19:37
923	23	1	32	750	2023-10-03 00:00:00	2023-11-02 07:57:29	2023-11-02 07:57:52
924	23	1	35	700	2023-10-03 00:00:00	2023-11-02 07:57:29	2023-11-02 07:57:52
925	23	1	45	54	2023-10-03 00:00:00	2023-11-02 07:57:29	2023-11-02 07:57:52
892	36	1	7	625	2023-10-29 00:00:00	2023-11-02 07:36:25	2023-11-10 08:48:57
915	25	1	34	950	2023-10-03 00:00:00	2023-11-02 07:53:15	2023-11-02 08:00:41
927	28	1	45	45	2023-10-03 00:00:00	2023-11-02 07:59:11	2023-11-02 07:59:21
928	34	1	17	696	2023-10-03 00:00:00	2023-11-02 07:59:49	2023-11-02 08:00:06
929	34	1	43	702	2023-10-03 00:00:00	2023-11-02 07:59:49	2023-11-02 08:00:06
930	25	1	43	175	2023-10-03 00:00:00	2023-11-02 08:00:32	2023-11-02 08:00:41
931	29	1	27	860	2023-10-04 00:00:00	2023-11-02 08:46:57	2023-11-02 08:49:10
932	29	1	43	120	2023-10-04 00:00:00	2023-11-02 08:46:57	2023-11-02 08:49:10
962	28	1	47	151	2023-10-04 00:00:00	2023-11-02 09:00:54	2023-11-13 09:02:39
984	32	1	21	760	2023-10-28 00:00:00	2023-11-02 09:34:22	2023-11-02 09:35:17
935	25	1	35	80	2023-10-04 00:00:00	2023-11-02 08:49:53	2023-11-02 08:50:36
936	25	1	43	150	2023-10-04 00:00:00	2023-11-02 08:49:53	2023-11-02 08:50:36
937	25	1	48	159	2023-10-04 00:00:00	2023-11-02 08:49:53	2023-11-02 08:50:36
938	25	1	18	900	2023-10-04 00:00:00	2023-11-02 08:49:53	2023-11-02 08:50:36
939	31	1	22	550	2023-10-04 00:00:00	2023-11-02 08:51:34	2023-11-02 08:52:56
940	31	1	35	40	2023-10-04 00:00:00	2023-11-02 08:51:34	2023-11-02 08:52:56
942	31	1	20	850	2023-10-04 00:00:00	2023-11-02 08:51:34	2023-11-15 02:20:05
990	31	1	20	525	2023-10-28 00:00:00	2023-11-02 09:37:03	2023-11-15 02:20:05
943	24	1	24	1000	2023-10-04 00:00:00	2023-11-02 08:53:37	2023-11-02 08:54:06
944	24	1	48	87	2023-10-04 00:00:00	2023-11-02 08:53:37	2023-11-02 08:54:06
945	24	1	23	1020	2023-10-04 00:00:00	2023-11-02 08:53:37	2023-11-02 08:54:06
946	23	1	32	960	2023-10-04 00:00:00	2023-11-02 08:55:18	2023-11-02 08:56:03
947	23	1	35	1140	2023-10-04 00:00:00	2023-11-02 08:55:18	2023-11-02 08:56:03
948	23	1	48	167	2023-10-04 00:00:00	2023-11-02 08:55:18	2023-11-02 08:56:03
949	23	1	23	45	2023-10-04 00:00:00	2023-11-02 08:55:18	2023-11-02 08:56:03
950	21	1	17	56	2023-10-04 00:00:00	2023-11-02 08:56:58	2023-11-02 08:57:44
951	21	1	34	40	2023-10-04 00:00:00	2023-11-02 08:56:58	2023-11-02 08:57:44
952	21	1	35	15	2023-10-04 00:00:00	2023-11-02 08:56:58	2023-11-02 08:57:44
953	21	1	49	123	2023-10-04 00:00:00	2023-11-02 08:56:58	2023-11-02 08:57:44
954	34	1	17	1250	2023-10-04 00:00:00	2023-11-02 08:58:23	2023-11-02 08:58:38
955	34	1	43	1200	2023-10-04 00:00:00	2023-11-02 08:58:23	2023-11-02 08:58:38
956	26	1	30	845	2023-10-04 00:00:00	2023-11-02 08:59:14	2023-11-02 08:59:34
957	26	1	49	1282	2023-10-04 00:00:00	2023-11-02 08:59:14	2023-11-02 08:59:34
958	30	1	30	1050	2023-10-04 00:00:00	2023-11-02 09:00:00	2023-11-02 09:00:16
963	28	1	58	320	2023-10-04 00:00:00	2023-11-02 09:00:54	2023-11-11 01:01:54
960	28	1	26	1000	2023-10-04 00:00:00	2023-11-02 09:00:54	2023-11-02 09:01:29
961	28	1	29	520	2023-10-04 00:00:00	2023-11-02 09:00:54	2023-11-02 09:01:29
971	25	1	47	33	2023-10-04 00:00:00	2023-11-02 09:04:50	2023-11-13 09:02:39
992	29	1	31	406	2023-10-28 00:00:00	2023-11-02 09:38:15	2023-11-13 08:45:44
964	27	1	19	1485	2023-10-04 00:00:00	2023-11-02 09:02:00	2023-11-02 09:02:17
965	27	1	45	1093	2023-10-04 00:00:00	2023-11-02 09:02:00	2023-11-02 09:02:17
966	33	1	19	1200	2023-10-04 00:00:00	2023-11-02 09:02:46	2023-11-02 09:03:11
967	33	1	40	830	2023-10-04 00:00:00	2023-11-02 09:02:46	2023-11-02 09:03:11
968	32	1	21	770	2023-10-04 00:00:00	2023-11-02 09:03:35	2023-11-02 09:04:00
969	32	1	46	380	2023-10-04 00:00:00	2023-11-02 09:03:35	2023-11-02 09:04:00
970	32	1	25	800	2023-10-04 00:00:00	2023-11-02 09:03:35	2023-11-02 09:04:00
934	25	1	34	770	2023-10-04 00:00:00	2023-11-02 08:49:53	2023-11-02 09:04:59
989	31	1	38	167	2023-10-28 00:00:00	2023-11-02 09:37:03	2023-11-15 02:19:37
972	28	1	26	1020	2023-10-28 00:00:00	2023-11-02 09:28:49	2023-11-02 09:29:35
973	28	1	29	830	2023-10-28 00:00:00	2023-11-02 09:28:49	2023-11-02 09:29:35
974	28	1	34	200	2023-10-28 00:00:00	2023-11-02 09:28:49	2023-11-02 09:29:35
1011	21	1	31	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-13 08:45:44
985	32	1	32	330	2023-10-28 00:00:00	2023-11-02 09:34:22	2023-11-02 09:35:17
986	32	1	46	430	2023-10-28 00:00:00	2023-11-02 09:34:22	2023-11-02 09:35:17
976	27	1	19	1427	2023-10-28 00:00:00	2023-11-02 09:30:42	2023-11-02 09:31:14
977	27	1	28	752	2023-10-28 00:00:00	2023-11-02 09:30:42	2023-11-02 09:31:14
978	33	1	19	1300	2023-10-28 00:00:00	2023-11-02 09:31:40	2023-11-02 09:32:05
979	33	1	28	1514	2023-10-28 00:00:00	2023-11-02 09:31:40	2023-11-02 09:32:05
980	22	1	6	675	2023-10-28 00:00:00	2023-11-02 09:32:45	2023-11-10 08:47:51
981	22	1	7	675	2023-10-28 00:00:00	2023-11-02 09:32:45	2023-11-10 08:48:57
959	30	1	58	1053	2023-10-04 00:00:00	2023-11-02 09:00:00	2023-11-11 01:01:54
983	22	1	10	500	2023-10-28 00:00:00	2023-11-02 09:32:45	2023-11-02 09:33:37
987	32	1	25	950	2023-10-28 00:00:00	2023-11-02 09:34:22	2023-11-02 09:35:17
988	31	1	22	370	2023-10-28 00:00:00	2023-11-02 09:37:03	2023-11-02 09:37:42
941	31	1	38	235	2023-10-04 00:00:00	2023-11-02 08:51:34	2023-11-15 02:19:37
991	29	1	27	280	2023-10-28 00:00:00	2023-11-02 09:38:15	2023-11-02 09:38:33
975	28	1	31	100	2023-10-28 00:00:00	2023-11-02 09:28:49	2023-11-13 08:45:44
993	25	1	34	75	2023-10-28 00:00:00	2023-11-02 09:39:02	2023-11-02 09:39:26
994	25	1	18	473	2023-10-28 00:00:00	2023-11-02 09:39:02	2023-11-02 09:39:26
995	24	1	24	122	2023-10-28 00:00:00	2023-11-02 09:39:58	2023-11-02 09:40:24
996	24	1	23	180	2023-10-28 00:00:00	2023-11-02 09:39:58	2023-11-02 09:40:24
997	23	1	23	145	2023-10-28 00:00:00	2023-11-02 09:40:53	2023-11-02 09:41:07
998	30	1	30	400	2023-10-28 00:00:00	2023-11-02 09:43:32	2023-11-02 09:43:49
999	26	1	49	0	2023-11-02 00:00:00	2023-11-02 09:44:28	2023-11-02 09:44:28
1000	26	1	49	402	2023-10-28 00:00:00	2023-11-02 09:44:47	2023-11-02 09:45:01
1001	34	1	17	116	2023-10-28 00:00:00	2023-11-02 09:45:33	2023-11-02 09:46:09
1002	21	1	11	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1003	21	1	12	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1004	21	1	16	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1005	21	1	30	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1006	21	1	37	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1007	21	1	42	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1008	21	1	45	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1009	21	1	44	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1010	21	1	28	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
933	29	1	31	950	2023-10-04 00:00:00	2023-11-02 08:46:57	2023-11-13 08:45:44
1012	21	1	33	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1013	21	1	36	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1014	21	1	39	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1017	21	1	41	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-02 09:49:35
1018	28	1	29	50	2023-10-14 00:00:00	2023-11-02 09:51:59	2023-11-02 09:52:22
1016	21	1	58	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-11 01:01:54
1046	30	1	58	1875	2023-10-01 00:00:00	2023-11-02 10:20:34	2023-11-11 01:01:54
1021	29	1	27	110	2023-10-14 00:00:00	2023-11-02 09:53:38	2023-11-02 09:53:50
1022	25	1	18	165	2023-10-14 00:00:00	2023-11-02 09:55:12	2023-11-02 09:55:25
1023	34	1	43	300	2023-10-14 00:00:00	2023-11-02 09:59:28	2023-11-02 09:59:45
1024	23	1	35	300	2023-10-14 00:00:00	2023-11-02 10:00:16	2023-11-02 10:00:31
1025	23	1	43	130	2023-10-14 00:00:00	2023-11-02 10:00:16	2023-11-02 10:00:31
1027	25	1	43	160	2023-10-01 00:00:00	2023-11-02 10:04:24	2023-11-06 10:45:02
1028	25	1	18	1300	2023-10-01 00:00:00	2023-11-02 10:04:24	2023-11-06 10:45:02
1052	27	1	19	3400	2023-10-01 00:00:00	2023-11-02 10:23:20	2023-11-06 10:47:26
1029	32	1	21	1050	2023-10-01 00:00:00	2023-11-02 10:06:40	2023-11-15 03:04:42
1030	32	1	46	577	2023-10-01 00:00:00	2023-11-02 10:06:40	2023-11-15 03:04:42
1033	29	1	43	160	2023-10-01 00:00:00	2023-11-02 10:11:09	2023-11-06 10:38:28
1015	21	1	47	0	2023-10-14 00:00:00	2023-11-02 09:49:35	2023-11-13 09:02:39
1041	31	1	20	1005	2023-10-01 00:00:00	2023-11-02 10:17:45	2023-11-15 02:20:05
1036	23	1	40	1200	2023-10-01 00:00:00	2023-11-02 10:12:47	2023-11-06 10:42:52
1026	25	1	34	1735	2023-10-01 00:00:00	2023-11-02 10:04:24	2023-11-06 10:45:02
1037	24	1	24	700	2023-11-02 00:00:00	2023-11-02 10:15:49	2023-11-02 10:17:14
1038	24	1	35	50	2023-11-02 00:00:00	2023-11-02 10:15:49	2023-11-02 10:17:14
1039	24	1	23	840	2023-11-02 00:00:00	2023-11-02 10:15:49	2023-11-02 10:17:14
1071	31	1	20	980	2023-10-27 00:00:00	2023-11-03 03:55:43	2023-11-15 02:20:05
1035	23	1	35	1834	2023-10-01 00:00:00	2023-11-02 10:12:47	2023-11-06 10:42:52
1040	31	1	38	350	2023-10-01 00:00:00	2023-11-02 10:17:45	2023-11-15 02:19:37
1070	31	1	38	300	2023-10-27 00:00:00	2023-11-03 03:55:43	2023-11-15 02:19:37
1045	30	1	30	2110	2023-10-01 00:00:00	2023-11-02 10:20:34	2023-11-06 10:50:21
1049	28	1	58	465	2023-10-01 00:00:00	2023-11-02 10:21:30	2023-11-11 01:01:54
1050	34	1	17	1426	2023-10-01 00:00:00	2023-11-02 10:22:20	2023-11-06 10:51:31
1077	29	1	31	1000	2023-10-27 00:00:00	2023-11-03 03:58:59	2023-11-13 08:45:44
1047	28	1	26	1520	2023-10-01 00:00:00	2023-11-02 10:21:30	2023-11-06 10:33:47
1048	28	1	29	1101	2023-10-01 00:00:00	2023-11-02 10:21:30	2023-11-06 10:33:47
1051	34	1	43	2600	2023-10-01 00:00:00	2023-11-02 10:22:20	2023-11-06 10:51:31
1055	30	1	58	810	2023-10-27 00:00:00	2023-11-03 03:45:51	2023-11-11 01:01:54
1053	33	1	19	2400	2023-10-01 00:00:00	2023-11-02 10:23:55	2023-11-06 10:47:58
1042	26	1	30	1604	2023-10-01 00:00:00	2023-11-02 10:19:14	2023-11-06 10:49:21
1054	30	1	30	400	2023-10-27 00:00:00	2023-11-03 03:45:51	2023-11-03 03:47:05
1058	28	1	58	445	2023-10-27 00:00:00	2023-11-03 03:47:32	2023-11-11 01:01:54
1080	28	1	35	240	2023-10-27 00:00:00	2023-11-03 04:01:59	2023-11-03 04:02:11
1057	28	1	29	900	2023-10-27 00:00:00	2023-11-03 03:47:32	2023-11-03 03:48:04
1019	28	1	58	30	2023-10-14 00:00:00	2023-11-02 09:51:59	2023-11-11 01:01:54
1059	26	1	30	800	2023-10-27 00:00:00	2023-11-03 03:48:40	2023-11-03 03:50:12
1060	26	1	49	400	2023-10-27 00:00:00	2023-11-03 03:48:40	2023-11-03 03:50:12
1061	32	1	21	850	2023-10-27 00:00:00	2023-11-03 03:50:58	2023-11-03 03:52:01
1062	32	1	32	400	2023-10-27 00:00:00	2023-11-03 03:50:58	2023-11-03 03:52:01
1063	32	1	46	520	2023-10-27 00:00:00	2023-11-03 03:50:58	2023-11-03 03:52:01
1064	32	1	25	1000	2023-10-27 00:00:00	2023-11-03 03:50:58	2023-11-03 03:52:01
1065	27	1	19	2020	2023-10-27 00:00:00	2023-11-03 03:52:38	2023-11-03 03:52:54
1066	27	1	28	752	2023-10-27 00:00:00	2023-11-03 03:52:38	2023-11-03 03:52:54
1067	33	1	19	1480	2023-10-27 00:00:00	2023-11-03 03:53:33	2023-11-03 03:53:54
1068	33	1	28	1193	2023-10-27 00:00:00	2023-11-03 03:53:33	2023-11-03 03:53:54
1069	31	1	22	650	2023-10-27 00:00:00	2023-11-03 03:55:43	2023-11-03 03:56:09
1096	31	1	38	400	2023-10-21 00:00:00	2023-11-03 06:10:16	2023-11-15 02:19:37
1031	32	1	25	1270	2023-10-01 00:00:00	2023-11-02 10:06:40	2023-11-15 03:04:42
1072	25	1	34	1115	2023-10-27 00:00:00	2023-11-03 03:56:50	2023-11-03 03:57:29
1073	25	1	18	1018	2023-10-27 00:00:00	2023-11-03 03:56:50	2023-11-03 03:57:29
1074	24	1	24	930	2023-10-27 00:00:00	2023-11-03 03:57:55	2023-11-03 03:58:15
1075	24	1	23	820	2023-10-27 00:00:00	2023-11-03 03:57:55	2023-11-03 03:58:15
1076	29	1	27	980	2023-10-27 00:00:00	2023-11-03 03:58:59	2023-11-03 03:59:23
1034	29	1	31	1575	2023-10-01 00:00:00	2023-11-02 10:11:09	2023-11-13 08:45:44
1078	23	1	35	810	2023-10-27 00:00:00	2023-11-03 04:00:53	2023-11-03 04:01:13
1079	23	1	23	180	2023-10-27 00:00:00	2023-11-03 04:00:53	2023-11-03 04:01:13
1056	28	1	26	1100	2023-10-27 00:00:00	2023-11-03 03:47:32	2023-11-03 04:02:11
1081	34	1	43	0	2023-10-27 00:00:00	2023-11-03 04:03:17	2023-11-03 04:03:17
1082	34	1	17	1486	2023-10-27 00:00:00	2023-11-03 04:04:39	2023-11-03 04:06:13
1083	23	1	43	500	2023-10-27 00:00:00	2023-11-03 04:07:04	2023-11-03 04:07:20
1084	22	1	6	625	2023-10-27 00:00:00	2023-11-03 04:10:12	2023-11-10 08:47:51
1085	22	1	7	625	2023-10-27 00:00:00	2023-11-03 04:10:12	2023-11-10 08:48:57
1086	22	1	8	550	2023-10-27 00:00:00	2023-11-03 04:10:12	2023-11-03 05:52:59
1087	22	1	9	500	2023-10-27 00:00:00	2023-11-03 04:10:12	2023-11-03 05:52:59
1088	22	1	10	550	2023-10-27 00:00:00	2023-11-03 04:10:12	2023-11-03 05:52:59
1089	32	1	21	750	2023-10-21 00:00:00	2023-11-03 06:04:35	2023-11-03 06:05:27
1090	32	1	32	300	2023-10-21 00:00:00	2023-11-03 06:04:35	2023-11-03 06:05:27
1091	32	1	46	400	2023-10-21 00:00:00	2023-11-03 06:04:35	2023-11-03 06:05:27
1092	32	1	25	900	2023-10-21 00:00:00	2023-11-03 06:04:35	2023-11-03 06:05:27
1093	24	1	24	1100	2023-10-21 00:00:00	2023-11-03 06:06:24	2023-11-03 06:07:14
1094	24	1	23	1180	2023-10-21 00:00:00	2023-11-03 06:06:24	2023-11-03 06:07:14
1043	26	1	38	340	2023-10-01 00:00:00	2023-11-02 10:19:14	2023-11-15 02:19:37
1032	29	1	27	1500	2023-10-01 00:00:00	2023-11-02 10:11:09	2023-11-06 10:38:28
1020	30	1	58	100	2023-10-14 00:00:00	2023-11-02 09:52:50	2023-11-11 01:01:54
1044	26	1	47	0	2023-10-01 00:00:00	2023-11-02 10:19:14	2023-11-13 09:02:39
1095	31	1	22	680	2023-10-21 00:00:00	2023-11-03 06:10:16	2023-11-03 06:13:37
1132	27	1	19	1050	2023-10-07 00:00:00	2023-11-03 06:41:11	2023-11-03 06:41:28
1133	27	1	45	1457	2023-10-07 00:00:00	2023-11-03 06:41:11	2023-11-03 06:41:28
1099	28	1	29	800	2023-10-21 00:00:00	2023-11-03 06:14:04	2023-11-03 06:14:45
1100	29	1	27	990	2023-10-21 00:00:00	2023-11-03 06:16:38	2023-11-03 06:16:57
1178	29	1	31	950	2023-10-10 00:00:00	2023-11-03 07:30:41	2023-11-13 08:45:44
1102	27	1	19	2086	2023-10-21 00:00:00	2023-11-03 06:17:45	2023-11-03 06:18:06
1103	27	1	28	36	2023-10-21 00:00:00	2023-11-03 06:17:45	2023-11-03 06:18:06
1104	33	1	19	1180	2023-10-21 00:00:00	2023-11-03 06:18:42	2023-11-03 06:18:59
1105	33	1	28	1034	2023-10-21 00:00:00	2023-11-03 06:18:42	2023-11-03 06:18:59
1106	23	1	35	736	2023-10-21 00:00:00	2023-11-03 06:20:16	2023-11-03 06:20:32
1107	23	1	43	1250	2023-10-21 00:00:00	2023-11-03 06:20:16	2023-11-03 06:20:32
1108	34	1	17	1430	2023-10-21 00:00:00	2023-11-03 06:21:15	2023-11-03 06:21:40
1109	34	1	43	309	2023-10-21 00:00:00	2023-11-03 06:21:15	2023-11-03 06:21:40
1110	30	1	30	800	2023-10-21 00:00:00	2023-11-03 06:23:09	2023-11-03 06:23:24
1112	28	1	58	400	2023-10-21 00:00:00	2023-11-03 06:24:03	2023-11-11 01:01:54
1134	33	1	19	1130	2023-10-07 00:00:00	2023-11-03 06:42:00	2023-11-03 06:42:17
1156	28	1	58	360	2023-10-07 00:00:00	2023-11-03 06:49:56	2023-11-11 01:01:54
1135	33	1	40	940	2023-10-07 00:00:00	2023-11-03 06:42:00	2023-11-03 06:42:17
1114	25	1	18	970	2023-10-21 00:00:00	2023-11-03 06:25:01	2023-11-03 06:25:22
1115	26	1	30	618	2023-10-21 00:00:00	2023-11-03 06:25:48	2023-11-03 06:26:16
1116	26	1	49	1473	2023-10-21 00:00:00	2023-11-03 06:25:48	2023-11-03 06:26:16
1118	29	1	49	91	2023-10-21 00:00:00	2023-11-03 06:26:41	2023-11-03 06:26:51
1119	38	3	35	260	2023-10-21 00:00:00	2023-11-03 06:27:54	2023-11-03 06:29:06
1120	31	1	35	70	2023-10-21 00:00:00	2023-11-03 06:29:39	2023-11-03 06:29:59
1121	31	1	45	161	2023-10-21 00:00:00	2023-11-03 06:29:39	2023-11-03 06:29:59
1098	28	1	26	1100	2023-10-21 00:00:00	2023-11-03 06:14:04	2023-11-03 06:30:43
1122	28	1	45	110	2023-10-21 00:00:00	2023-11-03 06:30:32	2023-11-03 06:30:43
1117	29	1	34	0	2023-10-21 00:00:00	2023-11-03 06:26:41	2023-11-03 06:31:19
1123	29	1	45	110	2023-10-21 00:00:00	2023-11-03 06:31:04	2023-11-03 06:31:19
1113	25	1	34	1200	2023-10-21 00:00:00	2023-11-03 06:25:01	2023-11-03 06:32:03
1124	25	1	45	50	2023-10-21 00:00:00	2023-11-03 06:31:47	2023-11-03 06:32:03
1175	38	3	47	0	2023-10-20 00:00:00	2023-11-03 06:59:53	2023-11-13 09:02:39
1129	22	1	8	550	2023-10-21 00:00:00	2023-11-03 06:34:39	2023-11-09 08:40:38
1127	22	1	6	625	2023-10-21 00:00:00	2023-11-03 06:34:39	2023-11-10 08:47:51
1128	22	1	7	625	2023-10-21 00:00:00	2023-11-03 06:34:39	2023-11-10 08:48:57
1111	30	1	58	1140	2023-10-21 00:00:00	2023-11-03 06:23:09	2023-11-11 01:01:54
1130	22	1	9	575	2023-10-21 00:00:00	2023-11-03 06:34:39	2023-11-03 06:35:59
1131	22	1	10	550	2023-10-21 00:00:00	2023-11-03 06:34:39	2023-11-03 06:35:59
1136	31	1	19	50	2023-10-07 00:00:00	2023-11-03 06:43:01	2023-11-03 06:43:29
1137	31	1	22	610	2023-10-07 00:00:00	2023-11-03 06:43:01	2023-11-03 06:43:29
1139	31	1	20	930	2023-10-07 00:00:00	2023-11-03 06:43:01	2023-11-15 02:20:05
1097	31	1	20	1010	2023-10-21 00:00:00	2023-11-03 06:10:16	2023-11-15 02:20:05
1140	25	1	34	1100	2023-10-07 00:00:00	2023-11-03 06:44:14	2023-11-03 06:45:02
1141	25	1	43	60	2023-10-07 00:00:00	2023-11-03 06:44:14	2023-11-03 06:45:02
1142	25	1	48	80	2023-10-07 00:00:00	2023-11-03 06:44:14	2023-11-03 06:45:02
1143	25	1	18	830	2023-10-07 00:00:00	2023-11-03 06:44:14	2023-11-03 06:45:02
1144	32	1	21	800	2023-10-07 00:00:00	2023-11-03 06:45:27	2023-11-03 06:46:06
1145	32	1	46	375	2023-10-07 00:00:00	2023-11-03 06:45:27	2023-11-03 06:46:06
1146	32	1	25	800	2023-10-07 00:00:00	2023-11-03 06:45:27	2023-11-03 06:46:06
1147	23	1	32	1100	2023-10-07 00:00:00	2023-11-03 06:46:41	2023-11-03 06:47:04
1148	23	1	35	1500	2023-10-07 00:00:00	2023-11-03 06:46:41	2023-11-03 06:47:04
1149	23	1	48	97	2023-10-07 00:00:00	2023-11-03 06:46:41	2023-11-03 06:47:04
1150	29	1	27	910	2023-10-07 00:00:00	2023-11-03 06:47:45	2023-11-03 06:48:12
1151	29	1	43	60	2023-10-07 00:00:00	2023-11-03 06:47:45	2023-11-03 06:48:12
1126	36	1	47	0	2023-10-21 00:00:00	2023-11-03 06:33:32	2023-11-13 09:02:39
1153	28	1	26	1100	2023-10-07 00:00:00	2023-11-03 06:49:56	2023-11-03 06:50:27
1154	28	1	29	580	2023-10-07 00:00:00	2023-11-03 06:49:56	2023-11-03 06:50:27
1138	31	1	38	313	2023-10-07 00:00:00	2023-11-03 06:43:01	2023-11-15 02:19:37
1158	30	1	58	1155	2023-10-07 00:00:00	2023-11-03 06:50:57	2023-11-11 01:01:54
1157	30	1	30	1050	2023-10-07 00:00:00	2023-11-03 06:50:57	2023-11-03 06:51:20
1101	29	1	31	1030	2023-10-21 00:00:00	2023-11-03 06:16:38	2023-11-13 08:45:44
1167	26	1	43	350	2023-10-07 00:00:00	2023-11-03 06:56:37	2023-11-03 06:56:47
1160	26	1	49	1053	2023-10-07 00:00:00	2023-11-03 06:51:43	2023-11-03 06:51:58
1161	21	1	49	214	2023-10-07 00:00:00	2023-11-03 06:52:25	2023-11-03 06:52:37
1162	24	1	24	1100	2023-10-07 00:00:00	2023-11-03 06:54:20	2023-11-03 06:55:20
1163	24	1	48	80	2023-10-07 00:00:00	2023-11-03 06:54:20	2023-11-03 06:55:20
1164	24	1	23	1050	2023-10-07 00:00:00	2023-11-03 06:54:20	2023-11-03 06:55:20
1165	29	1	34	0	2023-10-07 00:00:00	2023-11-03 06:55:52	2023-11-03 06:56:08
1166	29	1	48	163	2023-10-07 00:00:00	2023-11-03 06:55:52	2023-11-03 06:56:08
1159	26	1	30	700	2023-10-07 00:00:00	2023-11-03 06:51:43	2023-11-03 06:56:47
1168	34	1	17	1200	2023-10-07 00:00:00	2023-11-03 06:57:11	2023-11-03 06:57:26
1169	34	1	43	1400	2023-10-07 00:00:00	2023-11-03 06:57:11	2023-11-03 06:57:26
1170	21	1	17	32	2023-10-07 00:00:00	2023-11-03 06:57:52	2023-11-03 06:58:00
1171	38	3	30	0	2023-10-20 00:00:00	2023-11-03 06:59:53	2023-11-03 07:00:11
1172	38	3	34	0	2023-10-20 00:00:00	2023-11-03 06:59:53	2023-11-03 07:00:11
1173	38	3	45	200	2023-10-20 00:00:00	2023-11-03 06:59:53	2023-11-03 07:00:11
1174	38	3	49	0	2023-10-20 00:00:00	2023-11-03 06:59:53	2023-11-03 07:00:11
1155	28	1	47	303	2023-10-07 00:00:00	2023-11-03 06:49:56	2023-11-13 09:02:39
1176	25	1	45	50	2023-10-20 00:00:00	2023-11-03 07:11:46	2023-11-03 07:12:15
1177	29	1	27	880	2023-10-10 00:00:00	2023-11-03 07:30:41	2023-11-03 07:31:06
1152	29	1	31	1100	2023-10-07 00:00:00	2023-11-03 06:47:45	2023-11-13 08:45:44
1180	24	1	23	980	2023-10-10 00:00:00	2023-11-03 07:31:31	2023-11-03 07:31:55
1125	21	1	47	262	2023-10-21 00:00:00	2023-11-03 06:32:51	2023-11-13 09:02:39
1179	24	1	24	1000	2023-10-10 00:00:00	2023-11-03 07:31:31	2023-11-03 07:31:55
1181	25	1	34	1000	2023-10-10 00:00:00	2023-11-03 07:32:22	2023-11-03 07:32:38
1182	25	1	18	840	2023-10-10 00:00:00	2023-11-03 07:32:22	2023-11-03 07:32:38
1183	26	1	30	975	2023-10-10 00:00:00	2023-11-03 07:37:45	2023-11-03 07:41:58
1184	26	1	43	450	2023-10-10 00:00:00	2023-11-03 07:37:45	2023-11-03 07:41:58
1185	26	1	49	1350	2023-10-10 00:00:00	2023-11-03 07:37:45	2023-11-03 07:41:58
1186	34	1	17	1300	2023-10-10 00:00:00	2023-11-03 07:42:31	2023-11-03 07:44:53
1187	34	1	43	1350	2023-10-10 00:00:00	2023-11-03 07:42:31	2023-11-03 07:44:53
1188	32	1	21	730	2023-10-10 00:00:00	2023-11-03 07:45:46	2023-11-03 07:46:08
1189	32	1	46	400	2023-10-10 00:00:00	2023-11-03 07:45:46	2023-11-03 07:46:08
1190	32	1	25	850	2023-10-10 00:00:00	2023-11-03 07:45:46	2023-11-03 07:46:08
1191	27	1	19	2300	2023-10-10 00:00:00	2023-11-03 07:47:38	2023-11-03 07:47:50
1192	33	1	19	1300	2023-10-10 00:00:00	2023-11-03 07:48:45	2023-11-03 07:49:05
1193	33	1	40	975	2023-10-10 00:00:00	2023-11-03 07:48:45	2023-11-03 07:49:05
1194	30	1	30	1150	2023-10-10 00:00:00	2023-11-03 07:59:46	2023-11-03 08:00:09
1209	28	1	58	360	2023-10-06 00:00:00	2023-11-03 08:13:31	2023-11-11 01:01:54
1196	23	1	32	1100	2023-10-10 00:00:00	2023-11-03 08:00:41	2023-11-03 08:01:00
1197	23	1	35	1250	2023-10-10 00:00:00	2023-11-03 08:00:41	2023-11-03 08:01:00
1268	29	1	31	1000	2023-10-05 00:00:00	2023-11-03 10:11:11	2023-11-13 08:45:44
1195	30	1	58	1350	2023-10-10 00:00:00	2023-11-03 07:59:46	2023-11-11 01:01:54
1198	28	1	26	950	2023-10-10 00:00:00	2023-11-03 08:01:25	2023-11-03 08:02:54
1200	28	1	29	715	2023-10-10 00:00:00	2023-11-03 08:02:42	2023-11-03 08:02:54
1201	30	1	30	1400	2023-10-06 00:00:00	2023-11-03 08:10:09	2023-11-03 08:10:29
1261	30	1	58	1110	2023-10-05 00:00:00	2023-11-03 10:02:25	2023-11-11 01:01:54
1203	30	1	49	0	2023-10-06 00:00:00	2023-11-03 08:11:22	2023-11-03 08:11:22
1238	22	1	6	675	2023-10-30 00:00:00	2023-11-03 09:27:07	2023-11-10 08:47:51
1205	26	1	49	1404	2023-10-06 00:00:00	2023-11-03 08:11:48	2023-11-03 08:12:04
1206	28	1	26	1100	2023-10-06 00:00:00	2023-11-03 08:13:31	2023-11-03 08:14:04
1207	28	1	29	580	2023-10-06 00:00:00	2023-11-03 08:13:31	2023-11-03 08:14:04
1230	25	1	47	144	2023-10-06 00:00:00	2023-11-03 09:09:39	2023-11-13 09:02:39
1202	30	1	58	1125	2023-10-06 00:00:00	2023-11-03 08:10:09	2023-11-11 01:01:54
1210	32	1	21	800	2023-10-06 00:00:00	2023-11-03 09:00:54	2023-11-03 09:01:23
1211	32	1	46	350	2023-10-06 00:00:00	2023-11-03 09:00:54	2023-11-03 09:01:23
1212	32	1	25	800	2023-10-06 00:00:00	2023-11-03 09:00:54	2023-11-03 09:01:23
1213	27	1	19	1450	2023-10-06 00:00:00	2023-11-03 09:02:09	2023-11-03 09:02:28
1214	27	1	45	1755	2023-10-06 00:00:00	2023-11-03 09:02:09	2023-11-03 09:02:28
1215	33	1	19	1300	2023-10-06 00:00:00	2023-11-03 09:02:53	2023-11-03 09:03:11
1216	33	1	40	835	2023-10-06 00:00:00	2023-11-03 09:02:53	2023-11-03 09:03:11
1217	29	1	27	900	2023-10-06 00:00:00	2023-11-03 09:05:22	2023-11-03 09:05:57
1218	29	1	43	70	2023-10-06 00:00:00	2023-11-03 09:05:22	2023-11-03 09:05:57
1219	29	1	48	108	2023-10-06 00:00:00	2023-11-03 09:05:22	2023-11-03 09:05:57
1204	26	1	30	350	2023-10-06 00:00:00	2023-11-03 08:11:48	2023-11-03 09:06:38
1221	26	1	43	1100	2023-10-06 00:00:00	2023-11-03 09:06:27	2023-11-03 09:06:38
1222	34	1	17	1400	2023-10-06 00:00:00	2023-11-03 09:07:04	2023-11-03 09:07:21
1223	34	1	43	875	2023-10-06 00:00:00	2023-11-03 09:07:04	2023-11-03 09:07:21
1224	24	1	24	1000	2023-10-06 00:00:00	2023-11-03 09:08:10	2023-11-03 09:08:47
1225	24	1	48	108	2023-10-06 00:00:00	2023-11-03 09:08:10	2023-11-03 09:08:47
1226	24	1	23	1080	2023-10-06 00:00:00	2023-11-03 09:08:10	2023-11-03 09:08:47
1227	25	1	34	1045	2023-10-06 00:00:00	2023-11-03 09:09:39	2023-11-03 09:15:17
1228	25	1	48	108	2023-10-06 00:00:00	2023-11-03 09:09:39	2023-11-03 09:15:17
1229	25	1	18	870	2023-10-06 00:00:00	2023-11-03 09:09:39	2023-11-03 09:15:17
1233	31	1	38	270	2023-10-06 00:00:00	2023-11-03 09:16:05	2023-11-15 02:19:37
1231	31	1	22	600	2023-10-06 00:00:00	2023-11-03 09:16:05	2023-11-03 09:16:42
1232	31	1	35	80	2023-10-06 00:00:00	2023-11-03 09:16:05	2023-11-03 09:16:42
1254	31	1	38	280	2023-10-05 00:00:00	2023-11-03 09:57:49	2023-11-15 02:19:37
1235	23	1	32	1100	2023-10-06 00:00:00	2023-11-03 09:17:23	2023-11-03 09:18:00
1236	23	1	35	900	2023-10-06 00:00:00	2023-11-03 09:17:23	2023-11-03 09:18:00
1237	23	1	48	108	2023-10-06 00:00:00	2023-11-03 09:17:23	2023-11-03 09:18:00
1239	22	1	7	675	2023-10-30 00:00:00	2023-11-03 09:27:07	2023-11-10 08:48:57
1241	22	1	9	650	2023-10-30 00:00:00	2023-11-03 09:27:07	2023-11-03 09:27:52
1242	22	1	10	500	2023-10-30 00:00:00	2023-11-03 09:27:07	2023-11-03 09:27:52
1208	28	1	47	283	2023-10-06 00:00:00	2023-11-03 08:13:31	2023-11-13 09:02:39
1240	22	1	8	500	2023-10-30 00:00:00	2023-11-03 09:27:07	2023-11-03 09:31:24
1243	21	1	47	250	2023-10-30 00:00:00	2023-11-03 09:30:41	2023-11-13 09:02:39
1245	27	1	19	1425	2023-10-05 00:00:00	2023-11-03 09:37:02	2023-11-03 09:37:40
1246	27	1	45	757	2023-10-05 00:00:00	2023-11-03 09:37:02	2023-11-03 09:37:40
1255	31	1	40	25	2023-10-05 00:00:00	2023-11-03 09:57:49	2023-11-03 09:58:30
1234	31	1	20	910	2023-10-06 00:00:00	2023-11-03 09:16:05	2023-11-15 02:20:05
1257	28	1	26	1100	2023-10-05 00:00:00	2023-11-03 10:01:22	2023-11-03 10:30:28
1258	28	1	29	575	2023-10-05 00:00:00	2023-11-03 10:01:22	2023-11-03 10:01:55
1220	29	1	31	1000	2023-10-06 00:00:00	2023-11-03 09:05:22	2023-11-13 08:45:44
1260	30	1	30	1300	2023-10-05 00:00:00	2023-11-03 10:02:25	2023-11-03 10:03:30
1259	28	1	58	380	2023-10-05 00:00:00	2023-11-03 10:01:22	2023-11-11 01:01:54
1262	26	1	30	640	2023-10-05 00:00:00	2023-11-03 10:05:58	2023-11-03 10:06:21
1263	26	1	49	2306	2023-10-05 00:00:00	2023-11-03 10:05:58	2023-11-03 10:06:21
1264	21	1	49	12	2023-10-05 00:00:00	2023-11-03 10:06:59	2023-11-03 10:07:06
1265	29	1	27	900	2023-10-05 00:00:00	2023-11-03 10:11:11	2023-11-03 10:11:53
1266	29	1	43	60	2023-10-05 00:00:00	2023-11-03 10:11:11	2023-11-03 10:11:53
1267	29	1	48	147	2023-10-05 00:00:00	2023-11-03 10:11:11	2023-11-03 10:11:53
1244	22	1	47	150	2023-10-30 00:00:00	2023-11-03 09:31:17	2023-11-13 09:02:39
1270	25	1	48	106	2023-10-05 00:00:00	2023-11-03 10:15:17	2023-11-03 10:15:43
1271	25	1	18	870	2023-10-05 00:00:00	2023-11-03 10:15:17	2023-11-03 10:15:43
1199	28	1	58	60	2023-10-10 00:00:00	2023-11-03 08:01:25	2023-11-11 01:01:54
1256	31	1	20	850	2023-10-05 00:00:00	2023-11-03 09:57:49	2023-11-15 02:20:05
1269	25	1	43	60	2023-10-05 00:00:00	2023-11-03 10:15:17	2023-11-03 10:15:43
1287	28	1	47	202	2023-10-05 00:00:00	2023-11-03 10:30:20	2023-11-13 09:02:39
1273	25	1	34	1100	2023-10-05 00:00:00	2023-11-03 10:16:55	2023-11-03 10:18:12
1274	23	1	32	1000	2023-10-05 00:00:00	2023-11-03 10:19:35	2023-11-03 10:20:09
1275	23	1	35	1400	2023-10-05 00:00:00	2023-11-03 10:19:35	2023-11-03 10:20:09
1276	23	1	48	61	2023-10-05 00:00:00	2023-11-03 10:19:35	2023-11-03 10:20:09
1277	23	1	23	87	2023-10-05 00:00:00	2023-11-03 10:19:35	2023-11-03 10:20:09
1278	24	1	24	1070	2023-10-05 00:00:00	2023-11-03 10:20:52	2023-11-03 10:21:31
1279	24	1	48	106	2023-10-05 00:00:00	2023-11-03 10:20:52	2023-11-03 10:21:31
1280	24	1	23	1050	2023-10-05 00:00:00	2023-11-03 10:20:52	2023-11-03 10:21:31
1281	26	1	30	0	2023-11-03 00:00:00	2023-11-03 10:21:59	2023-11-03 10:22:12
1282	26	1	43	351	2023-11-03 00:00:00	2023-11-03 10:21:59	2023-11-03 10:22:12
1283	34	1	17	1370	2023-10-05 00:00:00	2023-11-03 10:22:51	2023-11-03 10:23:08
1284	34	1	43	1500	2023-10-05 00:00:00	2023-11-03 10:22:51	2023-11-03 10:23:08
1285	21	1	17	17	2023-10-05 00:00:00	2023-11-03 10:23:42	2023-11-03 10:23:51
1286	28	1	35	23	2023-10-05 00:00:00	2023-11-03 10:29:41	2023-11-03 10:29:57
1306	41	3	38	300	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-15 02:19:37
1288	40	3	17	330	2023-10-29 00:00:00	2023-11-06 09:58:19	2023-11-06 09:58:55
1289	40	3	19	392	2023-10-29 00:00:00	2023-11-06 09:58:19	2023-11-06 09:58:55
1290	40	3	43	428	2023-10-29 00:00:00	2023-11-06 09:58:19	2023-11-06 09:58:55
1291	40	3	23	530	2023-10-29 00:00:00	2023-11-06 09:58:19	2023-11-06 09:58:55
1292	42	3	23	200	2023-10-29 00:00:00	2023-11-06 10:02:50	2023-11-06 10:03:02
1293	41	3	27	564	2023-10-29 00:00:00	2023-11-06 10:07:44	2023-11-06 10:10:58
1294	41	3	30	564	2023-10-29 00:00:00	2023-11-06 10:07:44	2023-11-06 10:10:58
1295	41	3	32	300	2023-10-29 00:00:00	2023-11-06 10:07:44	2023-11-06 10:10:58
1308	41	3	47	566	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-13 09:02:39
1297	40	3	17	496	2023-10-28 00:00:00	2023-11-06 10:15:42	2023-11-06 10:16:37
1298	40	3	43	730	2023-10-28 00:00:00	2023-11-06 10:15:42	2023-11-06 10:16:37
1299	40	3	45	280	2023-10-28 00:00:00	2023-11-06 10:15:42	2023-11-06 10:16:37
1300	40	3	18	180	2023-10-28 00:00:00	2023-11-06 10:15:42	2023-11-06 10:16:37
1301	40	3	23	680	2023-10-28 00:00:00	2023-11-06 10:15:42	2023-11-06 10:16:37
1302	41	3	24	0	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-06 10:19:16
1303	41	3	27	154	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-06 10:19:16
1304	41	3	30	500	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-06 10:19:16
1305	41	3	34	0	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-06 10:19:16
1307	41	3	49	494	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-06 10:19:16
1312	42	3	47	205	2023-10-28 00:00:00	2023-11-06 10:19:48	2023-11-13 09:02:39
1314	42	3	58	200	2023-10-25 00:00:00	2023-11-06 10:23:27	2023-11-11 01:01:54
1310	42	3	24	1255	2023-10-28 00:00:00	2023-11-06 10:19:48	2023-11-06 10:20:34
1311	42	3	34	512	2023-10-28 00:00:00	2023-11-06 10:19:48	2023-11-06 10:20:34
1317	41	3	47	442	2023-10-27 00:00:00	2023-11-06 10:25:21	2023-11-13 09:02:39
1313	42	3	32	2000	2023-10-25 00:00:00	2023-11-06 10:23:27	2023-11-06 10:24:01
1351	21	1	31	165	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-13 08:45:44
1315	41	3	9	100	2023-10-27 00:00:00	2023-11-06 10:25:21	2023-11-06 10:25:43
1316	41	3	49	324	2023-10-27 00:00:00	2023-11-06 10:25:21	2023-11-06 10:25:43
1272	25	1	47	64	2023-10-05 00:00:00	2023-11-03 10:15:17	2023-11-13 09:02:39
1318	40	3	17	75	2023-10-27 00:00:00	2023-11-06 10:26:18	2023-11-06 10:27:05
1319	40	3	30	153	2023-10-27 00:00:00	2023-11-06 10:26:18	2023-11-06 10:27:05
1320	40	3	43	540	2023-10-27 00:00:00	2023-11-06 10:26:18	2023-11-06 10:27:05
1321	40	3	45	400	2023-10-27 00:00:00	2023-11-06 10:26:18	2023-11-06 10:27:05
1322	21	1	7	0	2023-10-31 00:00:00	2023-11-06 10:28:05	2023-11-10 08:48:57
1323	21	1	48	650	2023-10-31 00:00:00	2023-11-06 10:28:05	2023-11-06 10:28:12
1324	36	1	48	2100	2023-10-31 00:00:00	2023-11-06 10:28:39	2023-11-06 10:28:46
1329	24	1	24	1500	2023-10-01 00:00:00	2023-11-06 10:45:40	2023-11-06 10:46:30
1325	28	1	35	10	2023-10-01 00:00:00	2023-11-06 10:31:05	2023-11-06 10:33:47
1328	31	1	22	450	2023-10-01 00:00:00	2023-11-06 10:39:39	2023-11-06 10:40:34
1326	23	1	32	800	2023-10-01 00:00:00	2023-11-06 10:35:40	2023-11-06 10:42:52
1327	23	1	23	58	2023-10-01 00:00:00	2023-11-06 10:35:40	2023-11-06 10:42:52
1330	24	1	35	140	2023-10-01 00:00:00	2023-11-06 10:45:40	2023-11-06 10:46:30
1331	24	1	23	1760	2023-10-01 00:00:00	2023-11-06 10:45:40	2023-11-06 10:46:30
1332	27	1	49	71	2023-10-01 00:00:00	2023-11-06 10:47:00	2023-11-06 10:47:26
1333	26	1	49	746	2023-10-01 00:00:00	2023-11-06 10:48:42	2023-11-06 10:49:21
1334	21	1	17	227	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1335	21	1	19	205	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1336	21	1	21	180	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1337	21	1	22	70	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1338	21	1	24	219	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1339	21	1	26	207	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1340	21	1	27	200	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1341	21	1	30	160	2023-11-01 00:00:00	2023-11-07 06:14:37	2023-11-07 06:21:14
1342	21	1	32	150	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1343	21	1	34	208	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1344	21	1	35	250	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1345	21	1	43	240	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1346	21	1	45	120	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1347	21	1	49	414	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1348	21	1	20	222	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-15 02:20:05
1349	21	1	25	192	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1350	21	1	28	195	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-07 06:21:14
1296	41	3	47	76	2023-10-29 00:00:00	2023-11-06 10:07:44	2023-11-13 09:02:39
1309	41	3	58	600	2023-10-28 00:00:00	2023-11-06 10:17:58	2023-11-11 01:01:54
1389	21	1	17	90	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1390	21	1	21	80	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1391	21	1	22	90	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1354	21	1	46	289	2023-11-01 00:00:00	2023-11-07 06:22:28	2023-11-07 06:24:33
1355	21	1	23	320	2023-11-01 00:00:00	2023-11-07 06:22:28	2023-11-07 06:24:33
1356	29	1	49	32	2023-11-01 00:00:00	2023-11-07 06:25:04	2023-11-07 06:25:11
1359	22	1	8	450	2023-11-01 00:00:00	2023-11-07 06:29:17	2023-11-07 06:35:18
1360	22	1	9	515	2023-11-01 00:00:00	2023-11-07 06:29:17	2023-11-07 06:35:18
1361	22	1	10	450	2023-11-01 00:00:00	2023-11-07 06:29:17	2023-11-07 06:35:18
1363	21	1	17	100	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1364	21	1	21	105	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1365	21	1	24	115	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1366	21	1	26	110	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1367	21	1	27	69	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1368	21	1	29	52	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1369	21	1	30	92	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1370	21	1	32	90	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1371	21	1	34	124	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1372	21	1	35	120	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1374	21	1	43	90	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1375	21	1	45	80	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1376	21	1	46	107	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1377	21	1	49	131	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1378	21	1	18	80	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1380	21	1	23	100	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1381	21	1	25	120	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1382	21	1	28	120	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-07 06:49:04
1386	36	1	8	412	2023-11-02 00:00:00	2023-11-07 06:50:25	2023-11-07 06:51:53
1387	36	1	9	550	2023-11-02 00:00:00	2023-11-07 06:50:25	2023-11-07 06:51:53
1388	36	1	10	413	2023-11-02 00:00:00	2023-11-07 06:50:25	2023-11-07 06:51:53
1392	21	1	24	96	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1393	21	1	29	40	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1394	21	1	30	80	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1395	21	1	32	70	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1396	21	1	34	130	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1397	21	1	35	105	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1399	21	1	43	71	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1384	36	1	6	600	2023-11-02 00:00:00	2023-11-07 06:50:25	2023-11-10 08:47:51
1357	22	1	6	63	2023-11-01 00:00:00	2023-11-07 06:29:17	2023-11-10 08:47:51
1385	36	1	7	600	2023-11-02 00:00:00	2023-11-07 06:50:25	2023-11-10 08:48:57
1358	22	1	7	62	2023-11-01 00:00:00	2023-11-07 06:29:17	2023-11-10 08:48:57
1352	21	1	58	629	2023-11-01 00:00:00	2023-11-07 06:14:38	2023-11-11 01:01:54
1383	21	1	31	85	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-13 08:45:44
1362	22	1	47	250	2023-11-01 00:00:00	2023-11-07 06:29:17	2023-11-13 09:02:39
1398	21	1	38	90	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-15 02:19:37
1373	21	1	38	100	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-15 02:19:37
1353	21	1	38	106	2023-11-01 00:00:00	2023-11-07 06:22:28	2023-11-15 02:19:37
1379	21	1	20	120	2023-11-02 00:00:00	2023-11-07 06:44:52	2023-11-15 02:20:05
1400	21	1	45	70	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1401	21	1	46	115	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1402	21	1	49	118	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1403	21	1	18	68	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1404	21	1	20	109	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-15 02:20:05
1405	21	1	23	95	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1406	21	1	25	90	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1407	21	1	28	101	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-07 07:17:52
1452	25	1	47	325	2023-11-07 00:00:00	2023-11-08 01:17:50	2023-11-13 09:02:39
1428	36	1	6	538	2023-11-06 00:00:00	2023-11-07 07:43:52	2023-11-10 08:47:51
1422	36	1	6	288	2023-11-04 00:00:00	2023-11-07 07:40:05	2023-11-10 08:47:51
1411	36	1	8	450	2023-11-03 00:00:00	2023-11-07 07:19:09	2023-11-07 07:20:56
1412	36	1	9	725	2023-11-03 00:00:00	2023-11-07 07:19:09	2023-11-07 07:20:56
1413	36	1	10	450	2023-11-03 00:00:00	2023-11-07 07:19:09	2023-11-07 07:20:56
1415	21	1	47	25	2023-11-03 00:00:00	2023-11-07 07:34:30	2023-11-13 09:02:39
1458	41	3	47	102	2023-10-26 00:00:00	2023-11-08 03:32:16	2023-11-13 09:02:39
1416	22	1	6	213	2023-11-04 00:00:00	2023-11-07 07:37:21	2023-11-10 08:47:51
1448	28	1	58	550	2023-11-07 00:00:00	2023-11-08 01:12:35	2023-11-11 01:01:54
1418	22	1	8	87	2023-11-04 00:00:00	2023-11-07 07:37:21	2023-11-07 07:39:17
1419	22	1	9	175	2023-11-04 00:00:00	2023-11-07 07:37:21	2023-11-07 07:39:17
1420	22	1	10	88	2023-11-04 00:00:00	2023-11-07 07:37:21	2023-11-07 07:39:17
1427	36	1	47	325	2023-11-04 00:00:00	2023-11-07 07:40:05	2023-11-13 09:02:39
1432	36	1	7	537	2023-11-06 00:00:00	2023-11-07 07:51:16	2023-11-10 08:48:57
1410	36	1	7	675	2023-11-03 00:00:00	2023-11-07 07:19:09	2023-11-10 08:48:57
1424	36	1	8	262	2023-11-04 00:00:00	2023-11-07 07:40:05	2023-11-07 07:41:51
1425	36	1	9	425	2023-11-04 00:00:00	2023-11-07 07:40:05	2023-11-07 07:41:51
1426	36	1	10	263	2023-11-04 00:00:00	2023-11-07 07:40:05	2023-11-07 07:41:51
1414	36	1	47	325	2023-11-03 00:00:00	2023-11-07 07:21:24	2023-11-13 09:02:39
1439	24	1	45	350	2023-11-06 00:00:00	2023-11-07 08:39:18	2023-11-07 08:39:29
1429	36	1	8	375	2023-11-06 00:00:00	2023-11-07 07:43:52	2023-11-07 07:47:45
1430	36	1	9	250	2023-11-06 00:00:00	2023-11-07 07:43:52	2023-11-07 07:47:45
1431	36	1	10	375	2023-11-06 00:00:00	2023-11-07 07:43:52	2023-11-07 07:47:45
1409	36	1	6	675	2023-11-03 00:00:00	2023-11-07 07:19:09	2023-11-10 08:47:51
1417	22	1	7	212	2023-11-04 00:00:00	2023-11-07 07:37:21	2023-11-10 08:48:57
1433	27	1	19	350	2023-11-06 00:00:00	2023-11-07 07:52:21	2023-11-07 08:01:13
1434	33	1	19	103	2023-11-06 00:00:00	2023-11-07 08:01:51	2023-11-07 08:01:58
1435	32	1	19	140	2023-11-06 00:00:00	2023-11-07 08:25:22	2023-11-07 08:25:32
1436	31	1	19	103	2023-11-06 00:00:00	2023-11-07 08:37:03	2023-11-07 08:37:15
1437	26	1	27	380	2023-11-06 00:00:00	2023-11-07 08:37:51	2023-11-07 08:38:04
1438	29	1	27	348	2023-11-06 00:00:00	2023-11-07 08:38:37	2023-11-07 08:38:49
1441	28	1	58	250	2023-11-06 00:00:00	2023-11-07 08:40:28	2023-11-11 01:01:54
1408	21	1	31	67	2023-11-03 00:00:00	2023-11-07 07:13:16	2023-11-13 08:45:44
1421	22	1	47	0	2023-11-04 00:00:00	2023-11-07 07:37:21	2023-11-13 09:02:39
1443	33	1	19	400	2023-11-07 00:00:00	2023-11-08 00:46:13	2023-11-08 00:47:52
1444	27	1	19	700	2023-11-07 00:00:00	2023-11-08 00:48:26	2023-11-08 00:48:42
1445	31	1	19	130	2023-11-07 00:00:00	2023-11-08 00:49:36	2023-11-08 00:49:49
1446	32	1	19	50	2023-11-07 00:00:00	2023-11-08 00:50:26	2023-11-08 00:50:41
1440	30	1	58	800	2023-11-06 00:00:00	2023-11-07 08:39:57	2023-11-11 01:01:54
1447	30	1	58	300	2023-11-07 00:00:00	2023-11-08 01:10:39	2023-11-11 01:01:54
1449	29	1	27	470	2023-11-07 00:00:00	2023-11-08 01:16:16	2023-11-08 01:16:29
1450	26	1	27	262	2023-11-07 00:00:00	2023-11-08 01:16:53	2023-11-08 01:17:04
1451	25	1	27	81	2023-11-07 00:00:00	2023-11-08 01:17:50	2023-11-08 01:18:26
1442	25	1	47	288	2023-11-06 00:00:00	2023-11-07 08:41:54	2023-11-13 09:02:39
1453	24	1	45	480	2023-11-07 00:00:00	2023-11-08 01:18:55	2023-11-08 01:19:20
1454	40	3	17	73	2023-10-26 00:00:00	2023-11-08 03:26:51	2023-11-08 03:28:08
1455	40	3	30	94	2023-10-26 00:00:00	2023-11-08 03:26:51	2023-11-08 03:28:08
1460	22	1	62	225	2023-10-26 00:00:00	2023-11-08 03:38:42	2023-11-10 03:57:47
1462	22	1	63	225	2023-10-26 00:00:00	2023-11-08 03:38:42	2023-11-10 04:01:53
1459	22	1	59	400	2023-10-26 00:00:00	2023-11-08 03:38:42	2023-11-08 03:51:31
1472	22	1	62	0	2023-10-25 00:00:00	2023-11-08 04:07:50	2023-11-10 03:57:47
1464	36	1	61	63	2023-10-26 00:00:00	2023-11-08 03:51:58	2023-11-09 05:35:05
1474	22	1	63	0	2023-10-25 00:00:00	2023-11-08 04:07:50	2023-11-10 04:01:53
1463	36	1	59	75	2023-10-26 00:00:00	2023-11-08 03:51:58	2023-11-08 03:53:30
291	22	1	8	500	2023-10-20 00:00:00	2023-10-24 03:30:47	2023-11-09 05:36:10
1465	22	1	59	300	2023-10-20 00:00:00	2023-11-08 03:54:15	2023-11-08 03:55:02
507	22	1	8	500	2023-10-25 00:00:00	2023-10-26 02:27:47	2023-11-09 05:37:04
1457	21	1	63	250	2023-10-26 00:00:00	2023-11-08 03:30:50	2023-11-10 04:01:53
1423	36	1	7	287	2023-11-04 00:00:00	2023-11-07 07:40:05	2023-11-10 08:48:57
1467	36	1	62	175	2023-10-20 00:00:00	2023-11-08 04:00:49	2023-11-10 03:57:47
1468	36	1	63	175	2023-10-20 00:00:00	2023-11-08 04:00:49	2023-11-10 04:01:53
1471	22	1	59	400	2023-10-25 00:00:00	2023-11-08 04:07:50	2023-11-08 04:09:11
1479	21	1	62	182	2023-10-25 00:00:00	2023-11-08 04:12:03	2023-11-10 03:57:47
1477	36	1	61	75	2023-10-25 00:00:00	2023-11-08 04:10:37	2023-11-09 05:38:45
1480	21	1	63	178	2023-10-25 00:00:00	2023-11-08 04:12:03	2023-11-10 04:01:53
1475	36	1	59	125	2023-10-25 00:00:00	2023-11-08 04:10:37	2023-11-08 04:11:30
1469	21	1	62	50	2023-10-20 00:00:00	2023-11-08 04:01:48	2023-11-10 03:57:47
1456	21	1	62	250	2023-10-26 00:00:00	2023-11-08 03:30:50	2023-11-10 03:57:47
1470	21	1	63	50	2023-10-20 00:00:00	2023-11-08 04:01:48	2023-11-10 04:01:53
1476	36	1	62	275	2023-10-25 00:00:00	2023-11-08 04:10:37	2023-11-10 03:57:47
1478	36	1	63	275	2023-10-25 00:00:00	2023-11-08 04:10:37	2023-11-10 04:01:53
626	22	1	8	400	2023-10-26 00:00:00	2023-10-27 03:10:54	2023-11-09 05:34:25
1461	22	1	61	312	2023-10-26 00:00:00	2023-11-08 03:38:42	2023-11-09 05:34:25
1466	22	1	61	300	2023-10-20 00:00:00	2023-11-08 03:54:15	2023-11-09 05:36:10
1473	22	1	61	287	2023-10-25 00:00:00	2023-11-08 04:07:50	2023-11-09 05:37:04
1482	36	1	59	225	2023-10-31 00:00:00	2023-11-08 06:57:04	2023-11-08 07:00:12
1489	21	1	62	230	2023-10-24 00:00:00	2023-11-08 07:14:44	2023-11-10 03:57:47
1486	21	1	63	15	2023-10-31 00:00:00	2023-11-08 07:01:03	2023-11-10 04:01:53
1490	21	1	63	230	2023-10-24 00:00:00	2023-11-08 07:14:44	2023-11-10 04:01:53
1487	22	1	59	325	2023-10-31 00:00:00	2023-11-08 07:03:02	2023-11-08 07:03:53
1491	36	1	62	225	2023-10-24 00:00:00	2023-11-08 07:16:23	2023-11-10 03:57:47
1492	36	1	63	225	2023-10-24 00:00:00	2023-11-08 07:16:23	2023-11-10 04:01:53
1527	36	1	62	225	2023-10-23 00:00:00	2023-11-09 08:21:33	2023-11-10 03:57:47
1526	21	1	63	245	2023-10-23 00:00:00	2023-11-09 08:20:20	2023-11-10 04:01:53
1493	22	1	59	350	2023-10-24 00:00:00	2023-11-08 07:17:53	2023-11-08 07:21:24
1549	43	1	47	675	2023-10-16 00:00:00	2023-11-09 08:55:42	2023-11-13 09:02:39
1560	43	1	62	150	2023-10-18 00:00:00	2023-11-09 09:22:46	2023-11-10 03:57:47
1496	36	1	61	0	2023-10-19 00:00:00	2023-11-08 07:31:32	2023-11-08 07:32:44
1561	43	1	63	100	2023-10-18 00:00:00	2023-11-09 09:22:46	2023-11-10 04:01:53
1495	36	1	62	125	2023-10-19 00:00:00	2023-11-08 07:31:32	2023-11-10 03:57:47
1497	36	1	63	225	2023-10-19 00:00:00	2023-11-08 07:31:32	2023-11-10 04:01:53
1501	22	1	64	313	2023-10-26 00:00:00	2023-11-09 05:34:18	2023-11-09 05:34:25
1502	36	1	64	62	2023-10-26 00:00:00	2023-11-09 05:34:54	2023-11-09 05:35:05
1503	22	1	64	300	2023-10-20 00:00:00	2023-11-09 05:35:48	2023-11-09 05:36:10
1504	22	1	64	288	2023-10-25 00:00:00	2023-11-09 05:36:44	2023-11-09 05:37:04
1505	36	1	64	75	2023-10-25 00:00:00	2023-11-09 05:37:29	2023-11-09 05:38:45
1481	22	1	61	125	2023-10-13 00:00:00	2023-11-08 06:22:22	2023-11-09 05:39:54
1506	22	1	64	125	2023-10-13 00:00:00	2023-11-09 05:39:43	2023-11-09 05:39:54
761	22	1	8	250	2023-10-31 00:00:00	2023-11-02 06:06:30	2023-11-09 05:40:37
1488	22	1	61	250	2023-10-31 00:00:00	2023-11-08 07:03:02	2023-11-09 05:40:37
1507	22	1	64	250	2023-10-31 00:00:00	2023-11-09 05:40:26	2023-11-09 05:40:37
1484	36	1	61	187	2023-10-31 00:00:00	2023-11-08 06:57:04	2023-11-09 05:41:12
1508	36	1	64	188	2023-10-31 00:00:00	2023-11-09 05:41:03	2023-11-09 05:41:12
1494	22	1	61	300	2023-10-24 00:00:00	2023-11-08 07:17:53	2023-11-09 05:42:07
1509	22	1	64	300	2023-10-24 00:00:00	2023-11-09 05:41:50	2023-11-09 05:42:07
1500	22	1	61	275	2023-10-19 00:00:00	2023-11-08 07:36:54	2023-11-09 05:53:23
1510	22	1	64	275	2023-10-19 00:00:00	2023-11-09 05:51:46	2023-11-09 05:53:23
371	36	1	47	0	2023-10-19 00:00:00	2023-10-24 07:21:13	2023-11-13 09:02:39
1512	21	1	6	150	2023-10-05 00:00:00	2023-11-09 07:14:05	2023-11-10 08:47:51
1513	21	1	7	150	2023-10-05 00:00:00	2023-11-09 07:14:05	2023-11-10 08:48:57
1514	24	1	23	650	2023-10-09 00:00:00	2023-11-09 07:20:27	2023-11-09 07:21:23
1511	43	1	47	250	2023-10-19 00:00:00	2023-11-09 06:45:38	2023-11-13 09:02:39
1498	21	1	62	125	2023-10-19 00:00:00	2023-11-08 07:33:23	2023-11-10 03:57:47
1499	21	1	63	50	2023-10-19 00:00:00	2023-11-08 07:33:23	2023-11-10 04:01:53
1485	36	1	63	350	2023-10-31 00:00:00	2023-11-08 06:57:04	2023-11-10 04:01:53
1522	21	1	63	50	2023-10-17 00:00:00	2023-11-09 07:33:12	2023-11-10 04:01:53
1519	36	1	62	50	2023-10-17 00:00:00	2023-11-09 07:32:15	2023-11-10 03:57:47
1550	25	1	47	463	2023-11-08 00:00:00	2023-11-09 09:00:30	2023-11-13 09:02:39
1523	22	1	64	250	2023-10-17 00:00:00	2023-11-09 08:16:25	2023-11-09 08:19:05
1524	22	1	61	250	2023-10-17 00:00:00	2023-11-09 08:16:25	2023-11-09 08:19:05
1532	21	1	62	170	2023-10-21 00:00:00	2023-11-09 08:30:41	2023-11-10 03:57:47
1528	36	1	63	225	2023-10-23 00:00:00	2023-11-09 08:21:33	2023-11-10 04:01:53
1525	21	1	62	245	2023-10-23 00:00:00	2023-11-09 08:20:20	2023-11-10 03:57:47
1533	21	1	63	170	2023-10-21 00:00:00	2023-11-09 08:30:41	2023-11-10 04:01:53
1529	22	1	59	375	2023-10-23 00:00:00	2023-11-09 08:22:54	2023-11-09 08:23:32
1530	22	1	64	300	2023-10-23 00:00:00	2023-11-09 08:22:54	2023-11-09 08:23:32
1531	22	1	61	300	2023-10-23 00:00:00	2023-11-09 08:22:54	2023-11-09 08:23:32
1534	36	1	62	175	2023-10-21 00:00:00	2023-11-09 08:31:32	2023-11-10 03:57:47
1535	36	1	63	175	2023-10-21 00:00:00	2023-11-09 08:31:32	2023-11-10 04:01:53
1516	43	1	62	200	2023-10-20 00:00:00	2023-11-09 07:26:24	2023-11-10 03:57:47
1517	43	1	63	200	2023-10-20 00:00:00	2023-11-09 07:26:24	2023-11-10 04:01:53
1515	43	1	47	275	2023-10-20 00:00:00	2023-11-09 07:26:24	2023-11-13 09:02:39
1537	22	1	59	325	2023-10-21 00:00:00	2023-11-09 08:39:01	2023-11-09 08:40:38
1538	22	1	64	313	2023-10-21 00:00:00	2023-11-09 08:39:01	2023-11-09 08:40:38
1539	22	1	61	312	2023-10-21 00:00:00	2023-11-09 08:39:01	2023-11-09 08:40:38
1541	33	1	19	487	2023-11-09 00:00:00	2023-11-09 08:45:19	2023-11-15 09:09:49
1551	25	1	62	32	2023-11-08 00:00:00	2023-11-09 09:00:30	2023-11-10 03:57:47
1543	43	1	9	1150	2023-10-10 00:00:00	2023-11-09 08:47:08	2023-11-09 08:47:40
1544	43	1	48	175	2023-10-10 00:00:00	2023-11-09 08:47:08	2023-11-09 08:47:40
1545	29	1	34	0	2023-10-02 00:00:00	2023-11-09 08:50:25	2023-11-09 08:51:10
1546	29	1	45	235	2023-10-02 00:00:00	2023-11-09 08:50:25	2023-11-09 08:51:10
1540	43	1	47	175	2023-10-10 00:00:00	2023-11-09 08:44:30	2023-11-13 09:02:39
1547	24	1	45	440	2023-11-08 00:00:00	2023-11-09 08:51:12	2023-11-09 08:51:32
1548	24	1	62	61	2023-11-08 00:00:00	2023-11-09 08:51:12	2023-11-10 03:57:47
1536	43	1	47	125	2023-10-21 00:00:00	2023-11-09 08:37:56	2023-11-13 09:02:39
1483	36	1	62	150	2023-10-31 00:00:00	2023-11-08 06:57:04	2023-11-10 03:57:47
1552	25	1	65	10	2023-11-08 00:00:00	2023-11-09 09:00:30	2023-11-09 09:01:48
1553	36	1	64	125	2023-10-16 00:00:00	2023-11-09 09:05:13	2023-11-09 09:10:14
1554	36	1	61	125	2023-10-16 00:00:00	2023-11-09 09:05:13	2023-11-09 09:10:14
1555	22	1	64	25	2023-10-16 00:00:00	2023-11-09 09:10:53	2023-11-09 09:11:11
1556	22	1	61	25	2023-10-16 00:00:00	2023-11-09 09:10:53	2023-11-09 09:11:11
1557	43	1	66	400	2023-10-16 00:00:00	2023-11-09 09:12:35	2023-11-09 09:12:53
1521	21	1	62	330	2023-10-17 00:00:00	2023-11-09 07:33:12	2023-11-10 03:57:47
1520	36	1	63	75	2023-10-17 00:00:00	2023-11-09 07:32:15	2023-11-10 04:01:53
1558	21	1	62	150	2023-10-18 00:00:00	2023-11-09 09:21:46	2023-11-10 03:57:47
1559	21	1	63	235	2023-10-18 00:00:00	2023-11-09 09:21:46	2023-11-10 04:01:53
1542	33	1	19	481	2023-11-08 00:00:00	2023-11-09 08:45:33	2023-11-09 09:37:23
231	36	1	47	0	2023-10-17 00:00:00	2023-10-24 01:38:29	2023-11-13 09:02:39
1518	43	1	47	775	2023-10-17 00:00:00	2023-11-09 07:31:07	2023-11-13 09:02:39
1562	22	1	64	250	2023-10-18 00:00:00	2023-11-09 09:23:55	2023-11-09 09:24:16
1563	22	1	61	250	2023-10-18 00:00:00	2023-11-09 09:23:55	2023-11-09 09:24:16
1564	31	1	19	171	2023-11-08 00:00:00	2023-11-09 09:26:33	2023-11-09 09:26:55
1565	31	1	67	300	2023-11-08 00:00:00	2023-11-09 09:26:33	2023-11-09 09:26:55
1577	24	1	65	0	2023-11-09 00:00:00	2023-11-09 09:39:02	2023-11-15 09:09:49
1567	32	1	19	35	2023-11-08 00:00:00	2023-11-09 09:31:04	2023-11-09 09:31:32
1623	21	1	63	249	2023-10-30 00:00:00	2023-11-10 03:46:44	2023-11-10 04:01:53
1615	21	1	63	210	2023-10-27 00:00:00	2023-11-10 03:21:23	2023-11-10 04:01:53
982	22	1	8	500	2023-10-28 00:00:00	2023-11-02 09:32:45	2023-11-09 09:34:36
1570	22	1	59	550	2023-10-28 00:00:00	2023-11-09 09:34:04	2023-11-09 09:34:36
1571	22	1	64	375	2023-10-28 00:00:00	2023-11-09 09:34:04	2023-11-09 09:34:36
1572	22	1	61	375	2023-10-28 00:00:00	2023-11-09 09:34:04	2023-11-09 09:34:36
1610	22	1	62	0	2023-10-27 00:00:00	2023-11-10 03:19:09	2023-11-10 03:57:47
1574	26	1	65	84	2023-11-08 00:00:00	2023-11-09 09:36:16	2023-11-09 09:36:27
1575	27	1	19	350	2023-11-08 00:00:00	2023-11-09 09:37:47	2023-11-09 09:37:56
1578	24	1	65	54	2023-11-08 00:00:00	2023-11-09 09:39:38	2023-11-09 09:39:46
1579	29	1	27	580	2023-11-08 00:00:00	2023-11-09 09:40:32	2023-11-09 09:40:43
1582	36	1	8	238	2023-11-09 00:00:00	2023-11-09 09:42:37	2023-11-15 09:09:49
1638	36	1	7	375	2023-11-08 00:00:00	2023-11-10 06:36:24	2023-11-10 08:48:57
1583	36	1	10	0	2023-11-09 00:00:00	2023-11-09 09:42:37	2023-11-15 09:09:49
1580	36	1	6	375	2023-11-09 00:00:00	2023-11-09 09:42:37	2023-11-15 09:09:49
1592	26	1	27	120	2023-11-09 00:00:00	2023-11-10 01:33:56	2023-11-15 09:09:49
1642	43	1	7	712	2023-11-07 00:00:00	2023-11-10 07:04:36	2023-11-10 08:48:57
1586	43	1	8	312	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-09 09:47:39
1587	43	1	9	1100	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-09 09:47:39
1588	43	1	10	313	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-09 09:47:39
1589	43	1	59	550	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-09 09:47:39
1590	43	1	64	650	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-09 09:47:39
1619	41	3	63	70	2023-10-27 00:00:00	2023-11-10 03:25:12	2023-11-10 04:01:53
1604	25	1	47	420	2023-11-09 00:00:00	2023-11-10 01:46:03	2023-11-15 09:09:49
1594	26	1	65	1281	2023-11-09 00:00:00	2023-11-10 01:33:56	2023-11-15 09:09:49
1595	31	1	19	209	2023-11-09 00:00:00	2023-11-10 01:36:13	2023-11-10 01:36:45
1596	31	1	67	310	2023-11-09 00:00:00	2023-11-10 01:36:13	2023-11-10 01:36:45
1597	32	1	68	71	2023-11-09 00:00:00	2023-11-10 01:38:19	2023-11-10 01:38:26
1598	27	1	19	1093	2023-11-09 00:00:00	2023-11-10 01:39:08	2023-11-10 01:39:21
1599	29	1	27	470	2023-11-09 00:00:00	2023-11-10 01:40:25	2023-11-10 01:40:45
1593	26	1	47	138	2023-11-09 00:00:00	2023-11-10 01:33:56	2023-11-13 09:02:39
1566	5	2	58	0	2023-11-08 00:00:00	2023-11-09 09:28:31	2023-11-11 01:01:54
1602	24	1	45	500	2023-11-09 00:00:00	2023-11-10 01:43:23	2023-11-10 01:43:37
1601	30	1	58	800	2023-11-09 00:00:00	2023-11-10 01:41:54	2023-11-11 01:01:54
1600	29	1	47	11	2023-11-09 00:00:00	2023-11-10 01:40:25	2023-11-15 09:09:49
1605	43	1	59	625	2023-11-09 00:00:00	2023-11-10 01:47:13	2023-11-10 01:47:58
1606	43	1	64	850	2023-11-09 00:00:00	2023-11-10 01:47:13	2023-11-10 01:47:58
1607	32	1	68	147	2023-11-08 00:00:00	2023-11-10 03:05:37	2023-11-10 03:05:45
1608	23	1	69	477	2023-11-09 00:00:00	2023-11-10 03:11:42	2023-11-10 03:11:50
1609	22	1	59	450	2023-10-27 00:00:00	2023-11-10 03:19:09	2023-11-10 03:20:39
1611	22	1	64	425	2023-10-27 00:00:00	2023-11-10 03:19:09	2023-11-10 03:20:39
1612	22	1	61	425	2023-10-27 00:00:00	2023-11-10 03:19:09	2023-11-10 03:20:39
1628	22	1	59	425	2023-10-30 00:00:00	2023-11-10 03:54:02	2023-11-10 03:55:01
1629	22	1	64	375	2023-10-30 00:00:00	2023-11-10 03:54:02	2023-11-10 03:55:01
1617	36	1	63	175	2023-10-27 00:00:00	2023-11-10 03:22:36	2023-11-10 04:01:53
1627	36	1	66	950	2023-10-30 00:00:00	2023-11-10 03:49:34	2023-11-10 04:03:38
1613	22	1	63	0	2023-10-27 00:00:00	2023-11-10 03:19:09	2023-11-10 04:01:53
1621	42	3	63	70	2023-10-27 00:00:00	2023-11-10 03:30:48	2023-11-10 04:01:53
1616	36	1	62	175	2023-10-27 00:00:00	2023-11-10 03:22:36	2023-11-10 03:57:47
1631	36	1	64	200	2023-10-29 00:00:00	2023-11-10 04:18:16	2023-11-10 04:18:53
1630	22	1	61	375	2023-10-30 00:00:00	2023-11-10 03:54:02	2023-11-10 03:55:01
1576	24	1	62	0	2023-11-09 00:00:00	2023-11-09 09:39:02	2023-11-10 03:57:47
1573	23	1	62	455	2023-11-08 00:00:00	2023-11-09 09:35:07	2023-11-10 03:57:47
1614	21	1	62	210	2023-10-27 00:00:00	2023-11-10 03:21:23	2023-11-10 03:57:47
1632	36	1	61	200	2023-10-29 00:00:00	2023-11-10 04:18:16	2023-11-10 04:18:53
1624	21	1	66	550	2023-10-30 00:00:00	2023-11-10 03:46:44	2023-11-10 03:47:32
1622	21	1	62	224	2023-10-30 00:00:00	2023-11-10 03:46:44	2023-11-10 03:57:47
1618	41	3	62	100	2023-10-27 00:00:00	2023-11-10 03:25:12	2023-11-10 03:57:47
1620	42	3	62	100	2023-10-27 00:00:00	2023-11-10 03:30:48	2023-11-10 03:57:47
1591	34	1	63	495	2023-11-09 00:00:00	2023-11-10 01:32:41	2023-11-10 04:01:53
1568	32	1	63	37	2023-11-08 00:00:00	2023-11-09 09:31:04	2023-11-10 04:01:53
1569	34	1	63	217	2023-11-08 00:00:00	2023-11-09 09:33:26	2023-11-10 04:01:53
1625	36	1	62	175	2023-10-30 00:00:00	2023-11-10 03:48:35	2023-11-10 04:03:38
1626	36	1	63	225	2023-10-30 00:00:00	2023-11-10 03:48:35	2023-11-10 04:03:38
1634	43	1	61	50	2023-10-29 00:00:00	2023-11-10 04:19:25	2023-11-10 04:22:46
1636	22	1	64	375	2023-10-22 00:00:00	2023-11-10 04:26:19	2023-11-10 04:27:14
1633	43	1	64	50	2023-10-29 00:00:00	2023-11-10 04:19:25	2023-11-10 04:22:46
1635	22	1	8	0	2023-10-22 00:00:00	2023-11-10 04:26:19	2023-11-10 04:26:19
1637	36	1	6	375	2023-11-08 00:00:00	2023-11-10 06:36:24	2023-11-10 08:47:51
1603	28	1	58	435	2023-11-09 00:00:00	2023-11-10 01:45:05	2023-11-11 01:01:54
1639	36	1	8	237	2023-11-08 00:00:00	2023-11-10 06:36:24	2023-11-10 06:37:20
1640	36	1	10	238	2023-11-08 00:00:00	2023-11-10 06:36:24	2023-11-10 06:37:20
1584	43	1	6	400	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-10 08:47:51
1643	43	1	8	488	2023-11-07 00:00:00	2023-11-10 07:04:36	2023-11-10 07:06:53
1644	43	1	10	487	2023-11-07 00:00:00	2023-11-10 07:04:36	2023-11-10 07:06:53
1645	43	1	64	450	2023-11-07 00:00:00	2023-11-10 07:04:36	2023-11-10 07:06:53
1585	43	1	7	400	2023-11-08 00:00:00	2023-11-09 09:45:27	2023-11-10 08:48:57
1581	36	1	7	0	2023-11-09 00:00:00	2023-11-09 09:42:37	2023-11-15 09:09:49
1646	36	1	5	0	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 07:10:28
1647	36	1	7	200	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 08:48:57
1648	36	1	8	100	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 07:10:28
1649	36	1	9	900	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 07:10:28
1650	36	1	10	100	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 07:10:28
1651	36	1	59	450	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 07:10:28
1652	36	1	64	150	2023-11-07 00:00:00	2023-11-10 07:08:04	2023-11-10 07:10:28
1656	43	1	10	0	2023-11-10 00:00:00	2023-11-10 07:10:55	2023-11-10 07:10:55
1657	43	1	64	0	2023-11-10 00:00:00	2023-11-10 07:10:55	2023-11-10 07:10:55
1684	36	1	7	575	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 08:48:57
1659	26	1	65	450	2023-11-07 00:00:00	2023-11-10 07:12:42	2023-11-10 07:12:49
1660	31	1	67	240	2023-11-07 00:00:00	2023-11-10 07:13:24	2023-11-10 07:13:30
1661	32	1	68	170	2023-11-07 00:00:00	2023-11-10 07:14:01	2023-11-10 07:14:07
1662	26	1	62	65	2023-11-07 00:00:00	2023-11-10 07:14:40	2023-11-10 07:14:49
1663	23	1	62	550	2023-11-07 00:00:00	2023-11-10 07:15:16	2023-11-10 07:15:24
1664	34	1	63	625	2023-11-07 00:00:00	2023-11-10 07:15:51	2023-11-10 07:15:58
1665	36	1	64	350	2023-11-06 00:00:00	2023-11-10 07:18:28	2023-11-10 07:18:34
1666	23	1	62	406	2023-11-06 00:00:00	2023-11-10 07:19:10	2023-11-10 07:19:25
1667	23	1	62	0	2023-11-06 00:00:00	2023-11-10 07:19:10	2023-11-10 07:19:25
1668	34	1	63	475	2023-11-06 00:00:00	2023-11-10 07:19:56	2023-11-10 07:20:10
46	22	1	7	650	2023-09-06 00:00:00	2023-10-16 17:32:54	2023-11-10 08:48:57
690	28	1	58	0	2023-11-02 00:00:00	2023-11-02 05:21:00	2023-11-11 01:01:54
1669	36	1	59	325	2023-11-06 00:00:00	2023-11-10 07:20:57	2023-11-10 07:21:27
1670	36	1	59	530	2023-11-03 00:00:00	2023-11-10 07:24:15	2023-11-10 07:26:01
1671	36	1	62	275	2023-11-03 00:00:00	2023-11-10 07:24:15	2023-11-10 07:26:01
1672	36	1	64	500	2023-11-03 00:00:00	2023-11-10 07:24:15	2023-11-10 07:26:01
1673	36	1	61	500	2023-11-03 00:00:00	2023-11-10 07:24:15	2023-11-10 07:26:01
1674	36	1	63	475	2023-11-03 00:00:00	2023-11-10 07:24:15	2023-11-10 07:26:01
1675	36	1	59	255	2023-11-04 00:00:00	2023-11-10 07:35:25	2023-11-10 07:37:00
1676	36	1	62	300	2023-11-04 00:00:00	2023-11-10 07:35:25	2023-11-10 07:37:00
1677	36	1	64	25	2023-11-04 00:00:00	2023-11-10 07:35:25	2023-11-10 07:37:00
1678	36	1	61	25	2023-11-04 00:00:00	2023-11-10 07:35:25	2023-11-10 07:37:00
1679	36	1	63	300	2023-11-04 00:00:00	2023-11-10 07:35:25	2023-11-10 07:37:00
1680	22	1	59	250	2023-11-04 00:00:00	2023-11-10 07:37:49	2023-11-10 07:38:26
1681	22	1	64	388	2023-11-04 00:00:00	2023-11-10 07:37:49	2023-11-10 07:38:26
1682	22	1	61	387	2023-11-04 00:00:00	2023-11-10 07:37:49	2023-11-10 07:38:26
1696	28	1	58	600	2023-11-08 00:00:00	2023-11-11 01:02:30	2023-11-11 01:02:40
1699	23	1	62	671	2023-11-10 00:00:00	2023-11-11 01:15:36	2023-11-11 01:16:23
1685	36	1	59	450	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 07:43:57
1686	36	1	62	275	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 07:43:57
1687	36	1	64	388	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 07:43:57
1688	36	1	61	387	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 07:43:57
1689	36	1	63	325	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 07:43:57
1690	22	1	59	0	2023-11-01 00:00:00	2023-11-10 07:45:44	2023-11-10 07:45:44
1691	22	1	62	0	2023-11-01 00:00:00	2023-11-10 07:45:44	2023-11-10 07:45:44
1692	22	1	64	0	2023-11-01 00:00:00	2023-11-10 07:45:44	2023-11-10 07:45:44
1693	22	1	61	0	2023-11-01 00:00:00	2023-11-10 07:45:44	2023-11-10 07:45:44
1694	22	1	63	0	2023-11-01 00:00:00	2023-11-10 07:45:44	2023-11-10 07:45:44
1697	23	1	62	0	2023-11-10 00:00:00	2023-11-11 01:15:36	2023-11-11 01:16:23
1695	21	1	27	90	2023-11-03 00:00:00	2023-11-10 07:51:25	2023-11-10 07:51:35
1700	23	1	69	564	2023-11-10 00:00:00	2023-11-11 01:15:36	2023-11-11 01:16:23
1704	32	1	19	30	2023-11-10 00:00:00	2023-11-11 01:47:40	2023-11-11 01:48:15
1705	32	1	68	203	2023-11-10 00:00:00	2023-11-11 01:47:40	2023-11-11 01:48:15
1698	23	1	69	0	2023-11-10 00:00:00	2023-11-11 01:15:36	2023-11-11 01:16:23
1701	29	1	27	600	2023-11-10 00:00:00	2023-11-11 01:16:52	2023-11-11 01:17:00
1641	43	1	6	713	2023-11-07 00:00:00	2023-11-10 07:04:36	2023-11-10 08:47:51
1658	36	1	6	200	2023-11-07 00:00:00	2023-11-10 07:11:50	2023-11-10 08:47:51
1683	36	1	6	575	2023-11-01 00:00:00	2023-11-10 07:41:41	2023-11-10 08:47:51
1654	43	1	7	0	2023-11-10 00:00:00	2023-11-10 07:10:55	2023-11-10 08:48:57
1702	31	1	19	200	2023-11-10 00:00:00	2023-11-11 01:18:57	2023-11-11 01:19:21
1703	31	1	67	300	2023-11-10 00:00:00	2023-11-11 01:18:57	2023-11-11 01:19:21
1711	28	1	58	600	2023-11-10 00:00:00	2023-11-11 02:33:20	2023-11-11 02:33:28
1712	30	1	58	480	2023-11-10 00:00:00	2023-11-11 02:37:53	2023-11-11 02:38:13
1706	32	1	70	260	2023-11-10 00:00:00	2023-11-11 01:47:40	2023-11-11 01:48:15
1707	26	1	65	1415	2023-11-10 00:00:00	2023-11-11 02:29:10	2023-11-11 02:29:24
1708	27	1	19	1100	2023-11-10 00:00:00	2023-11-11 02:29:55	2023-11-11 02:30:07
1709	33	1	19	450	2023-11-10 00:00:00	2023-11-11 02:31:19	2023-11-11 02:31:26
1724	36	1	47	250	2023-11-01 00:00:00	2023-11-11 03:08:52	2023-11-13 09:02:39
1713	34	1	63	860	2023-11-10 00:00:00	2023-11-11 02:39:33	2023-11-11 02:39:40
1653	43	1	6	1000	2023-11-10 00:00:00	2023-11-10 07:10:55	2023-11-11 02:46:00
1714	24	1	45	530	2023-11-10 00:00:00	2023-11-11 02:40:45	2023-11-11 02:42:14
1655	43	1	8	450	2023-11-10 00:00:00	2023-11-10 07:10:55	2023-11-11 02:46:00
1715	43	1	9	875	2023-11-10 00:00:00	2023-11-11 02:44:31	2023-11-11 02:46:00
1716	43	1	59	75	2023-11-10 00:00:00	2023-11-11 02:44:31	2023-11-11 02:46:00
1718	22	1	64	250	2023-11-10 00:00:00	2023-11-11 02:47:13	2023-11-11 02:47:51
1717	22	1	59	250	2023-11-10 00:00:00	2023-11-11 02:47:13	2023-11-11 02:47:51
1719	32	1	70	259	2023-11-09 00:00:00	2023-11-11 02:55:09	2023-11-11 02:55:22
1720	43	1	6	1000	2023-11-09 00:00:00	2023-11-11 02:56:02	2023-11-11 02:56:25
1721	43	1	8	700	2023-11-09 00:00:00	2023-11-11 02:56:02	2023-11-11 02:56:25
1722	32	1	70	235	2023-11-08 00:00:00	2023-11-11 02:59:00	2023-11-11 02:59:14
1723	32	1	70	215	2023-11-07 00:00:00	2023-11-11 03:02:04	2023-11-11 03:02:10
1726	36	1	62	300	2023-11-02 00:00:00	2023-11-11 03:13:07	2023-11-11 03:14:51
1727	36	1	64	413	2023-11-02 00:00:00	2023-11-11 03:13:07	2023-11-11 03:14:51
1710	25	1	47	410	2023-11-10 00:00:00	2023-11-11 02:32:44	2023-11-13 09:02:39
1725	36	1	59	350	2023-11-02 00:00:00	2023-11-11 03:13:07	2023-11-11 03:14:51
1728	36	1	61	412	2023-11-02 00:00:00	2023-11-11 03:13:07	2023-11-11 03:14:51
1729	36	1	63	325	2023-11-02 00:00:00	2023-11-11 03:13:07	2023-11-11 03:14:51
1730	34	1	63	960	2023-11-11 00:00:00	2023-11-12 14:43:10	2023-11-12 14:43:24
1731	28	1	58	920	2023-11-11 00:00:00	2023-11-12 14:43:54	2023-11-12 14:44:09
1732	33	1	19	750	2023-11-11 00:00:00	2023-11-12 14:44:36	2023-11-12 14:44:46
1733	31	1	19	400	2023-11-11 00:00:00	2023-11-12 14:45:17	2023-11-12 14:45:31
1734	30	1	65	171	2023-11-11 00:00:00	2023-11-12 14:46:05	2023-11-12 14:46:16
1735	31	1	65	120	2023-11-11 00:00:00	2023-11-12 14:46:43	2023-11-12 14:46:59
1736	29	1	27	650	2023-11-11 00:00:00	2023-11-12 14:47:59	2023-11-12 14:48:12
1767	31	1	67	390	2023-11-13 00:00:00	2023-11-13 15:18:02	2023-11-13 15:18:34
1738	23	1	62	675	2023-11-11 00:00:00	2023-11-12 14:49:45	2023-11-12 14:49:55
1739	25	1	62	40	2023-11-11 00:00:00	2023-11-12 14:50:23	2023-11-12 14:50:38
1740	32	1	68	245	2023-11-11 00:00:00	2023-11-12 14:52:06	2023-11-12 14:52:24
1741	32	1	70	300	2023-11-11 00:00:00	2023-11-12 14:52:06	2023-11-12 14:52:24
1742	24	1	45	575	2023-11-11 00:00:00	2023-11-12 14:53:24	2023-11-12 14:53:36
1743	43	1	6	1000	2023-11-11 00:00:00	2023-11-12 14:54:17	2023-11-12 14:55:27
1744	43	1	8	925	2023-11-11 00:00:00	2023-11-12 14:54:17	2023-11-12 14:55:27
1745	43	1	9	625	2023-11-11 00:00:00	2023-11-12 14:54:17	2023-11-12 14:55:27
1746	22	1	9	150	2023-11-11 00:00:00	2023-11-12 14:56:10	2023-11-12 14:57:20
1747	22	1	59	375	2023-11-11 00:00:00	2023-11-12 14:56:10	2023-11-12 14:57:20
1748	22	1	64	325	2023-11-11 00:00:00	2023-11-12 14:56:10	2023-11-12 14:57:20
1737	25	1	47	361	2023-11-11 00:00:00	2023-11-12 14:48:52	2023-11-13 09:02:39
1749	22	1	64	150	2023-10-14 00:00:00	2023-11-13 09:32:38	2023-11-13 09:33:10
1750	22	1	61	150	2023-10-14 00:00:00	2023-11-13 09:32:38	2023-11-13 09:33:10
1751	28	1	26	0	2023-10-25 00:00:00	2023-11-13 14:20:51	2023-11-13 14:20:51
1752	28	1	29	0	2023-10-25 00:00:00	2023-11-13 14:20:51	2023-11-13 14:20:51
1753	30	1	58	427	2023-11-13 00:00:00	2023-11-13 15:07:20	2023-11-13 15:07:32
1754	28	1	58	750	2023-11-13 00:00:00	2023-11-13 15:08:56	2023-11-13 15:09:03
1755	32	1	63	47	2023-11-13 00:00:00	2023-11-13 15:10:27	2023-11-13 15:10:59
1756	32	1	68	280	2023-11-13 00:00:00	2023-11-13 15:10:27	2023-11-13 15:10:59
1757	32	1	70	310	2023-11-13 00:00:00	2023-11-13 15:10:27	2023-11-13 15:10:59
1758	34	1	63	176	2023-11-13 00:00:00	2023-11-13 15:11:22	2023-11-13 15:11:31
1760	25	1	27	30	2023-11-13 00:00:00	2023-11-13 15:14:41	2023-11-13 15:15:10
1761	25	1	47	500	2023-11-13 00:00:00	2023-11-13 15:14:41	2023-11-13 15:15:10
1762	25	1	62	50	2023-11-13 00:00:00	2023-11-13 15:14:41	2023-11-13 15:15:10
1763	23	1	62	690	2023-11-13 00:00:00	2023-11-13 15:15:41	2023-11-13 15:16:02
1764	30	1	65	565	2023-11-13 00:00:00	2023-11-13 15:16:36	2023-11-13 15:16:53
1765	24	1	45	518	2023-11-13 00:00:00	2023-11-13 15:17:21	2023-11-13 15:17:35
1766	31	1	19	300	2023-11-13 00:00:00	2023-11-13 15:18:02	2023-11-13 15:18:34
1768	27	1	19	1000	2023-11-13 00:00:00	2023-11-13 15:19:02	2023-11-13 15:19:19
1769	33	1	19	750	2023-11-13 00:00:00	2023-11-13 15:19:42	2023-11-13 15:19:56
1770	43	1	6	700	2023-11-13 00:00:00	2023-11-13 15:20:25	2023-11-13 15:20:43
1771	22	1	6	250	2023-11-13 00:00:00	2023-11-13 15:21:21	2023-11-13 15:22:26
1772	22	1	59	600	2023-11-13 00:00:00	2023-11-13 15:21:21	2023-11-13 15:22:26
1773	22	1	64	600	2023-11-13 00:00:00	2023-11-13 15:21:21	2023-11-13 15:22:26
1774	34	1	71	526	2023-11-10 00:00:00	2023-11-14 05:58:12	2023-11-14 05:58:21
1775	25	1	71	210	2023-11-10 00:00:00	2023-11-14 05:58:57	2023-11-14 05:59:20
1776	25	1	71	220	2023-11-11 00:00:00	2023-11-14 06:01:44	2023-11-14 06:01:54
1777	34	1	71	220	2023-11-11 00:00:00	2023-11-14 06:02:37	2023-11-14 06:02:45
1778	24	1	71	137	2023-11-11 00:00:00	2023-11-14 06:03:18	2023-11-14 06:03:25
1779	23	1	71	50	2023-11-11 00:00:00	2023-11-14 06:06:04	2023-11-14 06:06:17
1780	24	1	71	316	2023-11-13 00:00:00	2023-11-14 06:14:11	2023-11-14 06:14:22
1781	23	1	71	148	2023-11-13 00:00:00	2023-11-14 06:14:48	2023-11-14 06:14:59
1782	34	1	71	43	2023-11-13 00:00:00	2023-11-14 06:15:23	2023-11-14 06:15:35
1783	32	1	32	0	2023-10-01 00:00:00	2023-11-15 03:04:02	2023-11-15 03:04:42
1784	32	1	68	310	2023-11-14 00:00:00	2023-11-15 15:53:57	2023-11-15 15:54:12
1785	31	1	67	420	2023-11-14 00:00:00	2023-11-15 15:54:45	2023-11-15 15:54:59
1786	24	1	45	510	2023-11-14 00:00:00	2023-11-15 15:56:22	2023-11-15 15:56:47
1787	24	1	71	187	2023-11-14 00:00:00	2023-11-15 15:56:22	2023-11-15 15:56:47
1788	31	1	19	270	2023-11-14 00:00:00	2023-11-15 15:57:44	2023-11-15 15:58:10
1789	31	1	71	30	2023-11-14 00:00:00	2023-11-15 15:57:44	2023-11-15 15:58:10
1790	27	1	19	1255	2023-11-14 00:00:00	2023-11-15 15:58:38	2023-11-15 15:58:50
1791	33	1	19	900	2023-11-14 00:00:00	2023-11-15 15:59:09	2023-11-15 15:59:29
1792	29	1	27	550	2023-11-14 00:00:00	2023-11-15 15:59:53	2023-11-15 16:00:13
1793	25	1	47	503	2023-11-14 00:00:00	2023-11-15 16:00:57	2023-11-15 16:01:22
1794	25	1	62	90	2023-11-14 00:00:00	2023-11-15 16:00:57	2023-11-15 16:01:22
1795	23	1	62	561	2023-11-14 00:00:00	2023-11-15 16:01:59	2023-11-15 16:02:19
1796	23	1	71	24	2023-11-14 00:00:00	2023-11-15 16:01:59	2023-11-15 16:02:19
1797	34	1	71	850	2023-11-14 00:00:00	2023-11-15 16:02:44	2023-11-15 16:03:01
1798	30	1	65	288	2023-11-14 00:00:00	2023-11-15 16:03:33	2023-11-15 16:03:44
1799	26	1	65	1282	2023-11-14 00:00:00	2023-11-15 16:04:08	2023-11-15 16:04:20
1800	28	1	58	900	2023-11-14 00:00:00	2023-11-15 16:05:13	2023-11-15 16:05:19
1801	43	1	6	975	2023-11-14 00:00:00	2023-11-15 16:06:36	2023-11-15 16:09:49
1802	43	1	8	875	2023-11-14 00:00:00	2023-11-15 16:06:36	2023-11-15 16:09:49
1803	43	1	9	900	2023-11-14 00:00:00	2023-11-15 16:06:36	2023-11-15 16:09:49
1804	22	1	6	200	2023-11-14 00:00:00	2023-11-15 16:10:29	2023-11-15 16:11:45
1805	22	1	8	100	2023-11-14 00:00:00	2023-11-15 16:10:29	2023-11-15 16:11:45
1806	22	1	9	50	2023-11-14 00:00:00	2023-11-15 16:10:29	2023-11-15 16:11:45
1807	22	1	59	675	2023-11-14 00:00:00	2023-11-15 16:10:29	2023-11-15 16:11:45
1808	22	1	64	550	2023-11-14 00:00:00	2023-11-15 16:10:29	2023-11-15 16:11:45
1809	28	1	58	750	2023-11-15 00:00:00	2023-11-15 16:13:32	2023-11-15 16:13:54
1810	30	1	58	427	2023-11-15 00:00:00	2023-11-15 16:17:58	2023-11-15 16:18:06
1759	29	1	27	550	2023-11-13 00:00:00	2023-11-13 15:13:30	2023-11-16 03:26:21
1811	32	1	21	640	2023-11-15 00:00:00	2023-11-15 16:20:25	2023-11-15 16:20:53
1812	32	1	68	320	2023-11-15 00:00:00	2023-11-15 16:20:25	2023-11-15 16:20:53
1813	32	1	70	300	2023-11-15 00:00:00	2023-11-15 16:20:25	2023-11-15 16:20:53
1814	30	1	65	489	2023-11-15 00:00:00	2023-11-15 16:21:17	2023-11-15 16:21:28
1815	26	1	65	1282	2023-11-15 00:00:00	2023-11-15 16:21:56	2023-11-15 16:22:18
1816	25	1	47	530	2023-11-15 00:00:00	2023-11-15 16:22:41	2023-11-15 16:22:50
1849	32	1	74	100	2023-11-14 00:00:00	2023-11-16 03:43:31	2023-11-16 03:44:09
1818	23	1	62	1010	2023-11-15 00:00:00	2023-11-15 16:23:48	2023-11-15 16:23:59
1819	24	1	45	550	2023-11-15 00:00:00	2023-11-15 16:24:24	2023-11-15 16:24:33
1820	31	1	19	100	2023-11-15 00:00:00	2023-11-15 16:25:09	2023-11-15 16:25:27
1821	31	1	67	450	2023-11-15 00:00:00	2023-11-15 16:25:09	2023-11-15 16:25:27
1822	27	1	19	1280	2023-11-15 00:00:00	2023-11-15 16:25:49	2023-11-15 16:26:00
1823	33	1	19	1300	2023-11-15 00:00:00	2023-11-15 16:26:45	2023-11-15 16:26:57
1824	43	1	6	1250	2023-11-15 00:00:00	2023-11-15 16:28:44	2023-11-15 16:29:31
1825	43	1	8	1100	2023-11-15 00:00:00	2023-11-15 16:28:44	2023-11-15 16:29:31
1826	43	1	9	1125	2023-11-15 00:00:00	2023-11-15 16:28:44	2023-11-15 16:29:31
1827	43	1	59	275	2023-11-15 00:00:00	2023-11-15 16:30:01	2023-11-15 16:30:33
1828	43	1	64	575	2023-11-15 00:00:00	2023-11-15 16:30:01	2023-11-15 16:30:33
1829	22	1	59	300	2023-11-15 00:00:00	2023-11-15 16:31:02	2023-11-15 16:31:40
1830	22	1	64	225	2023-11-15 00:00:00	2023-11-15 16:31:02	2023-11-15 16:31:40
1831	29	1	80	305	2023-11-13 00:00:00	2023-11-16 03:26:12	2023-11-16 03:26:21
1832	25	1	80	345	2023-11-13 00:00:00	2023-11-16 03:26:48	2023-11-16 03:26:59
1833	32	1	74	120	2023-11-13 00:00:00	2023-11-16 03:28:03	2023-11-16 03:28:39
1817	29	1	27	650	2023-11-15 00:00:00	2023-11-15 16:23:14	2023-11-16 03:29:31
1834	29	1	80	375	2023-11-15 00:00:00	2023-11-16 03:29:21	2023-11-16 03:29:31
1835	25	1	80	252	2023-11-15 00:00:00	2023-11-16 03:29:57	2023-11-16 03:30:09
1836	30	1	80	60	2023-11-15 00:00:00	2023-11-16 03:30:34	2023-11-16 03:30:47
1837	34	1	71	1074	2023-11-15 00:00:00	2023-11-16 03:31:38	2023-11-16 03:31:49
1838	23	1	71	84	2023-11-15 00:00:00	2023-11-16 03:32:16	2023-11-16 03:32:26
1839	25	1	71	124	2023-11-15 00:00:00	2023-11-16 03:32:54	2023-11-16 03:33:07
1840	28	1	77	260	2023-11-15 00:00:00	2023-11-16 03:33:37	2023-11-16 03:33:58
1841	25	1	77	155	2023-11-15 00:00:00	2023-11-16 03:34:26	2023-11-16 03:34:42
1842	24	1	78	340	2023-11-15 00:00:00	2023-11-16 03:35:13	2023-11-16 03:35:25
1843	25	1	78	50	2023-11-15 00:00:00	2023-11-16 03:35:47	2023-11-16 03:36:00
1844	32	1	75	28	2023-11-15 00:00:00	2023-11-16 03:39:00	2023-11-16 03:39:24
1845	32	1	76	90	2023-11-15 00:00:00	2023-11-16 03:39:00	2023-11-16 03:39:24
1846	31	1	75	120	2023-11-15 00:00:00	2023-11-16 03:40:25	2023-11-16 03:40:52
1847	31	1	76	120	2023-11-15 00:00:00	2023-11-16 03:40:25	2023-11-16 03:40:52
1848	31	1	79	210	2023-11-15 00:00:00	2023-11-16 03:40:25	2023-11-16 03:40:52
1850	32	1	75	150	2023-11-14 00:00:00	2023-11-16 03:43:31	2023-11-16 03:44:09
1851	32	1	76	150	2023-11-14 00:00:00	2023-11-16 03:43:31	2023-11-16 03:44:09
1852	32	1	78	230	2023-11-14 00:00:00	2023-11-16 03:43:31	2023-11-16 03:44:09
1853	30	1	77	450	2023-11-14 00:00:00	2023-11-16 03:44:40	2023-11-16 03:44:58
1854	30	1	80	150	2023-11-14 00:00:00	2023-11-16 03:44:40	2023-11-16 03:44:58
1855	31	1	79	120	2023-11-14 00:00:00	2023-11-16 03:45:30	2023-11-16 03:45:41
1856	29	1	80	160	2023-11-14 00:00:00	2023-11-16 03:46:04	2023-11-16 03:46:16
1857	25	1	80	310	2023-11-14 00:00:00	2023-11-16 03:46:45	2023-11-16 03:46:57
1858	32	1	74	100	2023-11-09 00:00:00	2023-11-16 03:59:01	2023-11-16 03:59:07
1859	21	1	50	530	2023-10-05 00:00:00	2023-11-16 04:22:10	2023-11-16 04:22:25
1860	21	1	50	620	2023-10-04 00:00:00	2023-11-16 04:24:00	2023-11-16 04:24:11
1861	21	1	50	560	2023-10-03 00:00:00	2023-11-16 04:24:41	2023-11-16 04:24:54
1862	21	1	50	300	2023-10-02 00:00:00	2023-11-16 04:25:21	2023-11-16 04:25:29
1863	21	1	50	200	2023-10-06 00:00:00	2023-11-16 04:27:28	2023-11-16 04:27:42
1864	21	1	81	650	2023-11-04 00:00:00	2023-11-16 04:31:21	2023-11-16 04:31:32
1865	22	1	72	100	2023-10-13 00:00:00	2023-11-16 05:49:58	2023-11-16 05:50:35
1866	22	1	73	75	2023-10-13 00:00:00	2023-11-16 05:49:58	2023-11-16 05:50:35
1867	36	1	82	150	2023-10-18 00:00:00	2023-11-16 05:54:37	2023-11-16 05:55:06
1868	22	1	82	150	2023-10-18 00:00:00	2023-11-16 05:55:37	2023-11-16 05:55:48
1869	22	1	82	225	2023-10-19 00:00:00	2023-11-16 05:56:57	2023-11-16 05:57:24
1870	21	1	83	113	2023-10-14 00:00:00	2023-11-16 06:00:56	2023-11-16 06:01:12
1871	22	1	84	125	2023-10-18 00:00:00	2023-11-16 06:04:19	2023-11-16 06:04:26
1872	22	1	85	125	2023-10-18 00:00:00	2023-11-16 06:06:38	2023-11-16 06:06:45
1873	36	1	85	100	2023-10-17 00:00:00	2023-11-16 06:07:19	2023-11-16 06:07:36
1874	21	1	85	50	2023-10-17 00:00:00	2023-11-16 06:08:03	2023-11-16 06:08:09
1878	32	1	75	110	2023-11-16 00:00:00	2023-11-16 10:25:19	2023-11-16 10:26:03
1875	32	1	68	142	2023-11-16 00:00:00	2023-11-16 09:23:23	2023-11-16 10:26:03
1876	32	1	21	700	2023-11-16 00:00:00	2023-11-16 10:25:19	2023-11-16 10:26:03
1877	32	1	70	330	2023-11-16 00:00:00	2023-11-16 10:25:19	2023-11-16 10:26:03
1879	29	1	27	650	2023-11-16 00:00:00	2023-11-16 10:27:01	2023-11-16 10:27:16
1880	29	1	80	560	2023-11-16 00:00:00	2023-11-16 10:27:01	2023-11-16 10:27:16
1881	25	1	47	568	2023-11-16 00:00:00	2023-11-16 10:28:24	2023-11-16 10:29:13
1882	25	1	71	238	2023-11-16 00:00:00	2023-11-16 10:28:24	2023-11-16 10:29:13
1883	25	1	77	35	2023-11-16 00:00:00	2023-11-16 10:28:24	2023-11-16 10:29:13
1884	25	1	80	140	2023-11-16 00:00:00	2023-11-16 10:28:24	2023-11-16 10:29:13
1885	23	1	62	1085	2023-11-16 00:00:00	2023-11-16 10:30:01	2023-11-16 10:30:21
1886	23	1	71	84	2023-11-16 00:00:00	2023-11-16 10:30:01	2023-11-16 10:30:21
1887	34	1	71	766	2023-11-16 00:00:00	2023-11-16 10:30:47	2023-11-16 10:31:00
1888	27	1	19	1280	2023-11-16 00:00:00	2023-11-16 10:31:27	2023-11-16 10:31:36
1889	33	1	19	1427	2023-11-16 00:00:00	2023-11-16 10:31:59	2023-11-16 10:32:23
1890	28	1	58	750	2023-11-16 00:00:00	2023-11-16 10:32:51	2023-11-16 10:33:08
1891	28	1	77	510	2023-11-16 00:00:00	2023-11-16 10:32:51	2023-11-16 10:33:08
1892	30	1	58	427	2023-11-16 00:00:00	2023-11-16 10:33:37	2023-11-16 10:33:53
1893	30	1	65	500	2023-11-16 00:00:00	2023-11-16 10:33:37	2023-11-16 10:33:53
1894	26	1	65	855	2023-11-16 00:00:00	2023-11-16 10:34:33	2023-11-16 10:34:58
1895	31	1	67	467	2023-11-16 00:00:00	2023-11-16 10:35:35	2023-11-16 10:36:17
1896	31	1	75	60	2023-11-16 00:00:00	2023-11-16 10:35:35	2023-11-16 10:36:17
1897	31	1	76	330	2023-11-16 00:00:00	2023-11-16 10:35:35	2023-11-16 10:36:17
1898	24	1	45	560	2023-11-16 00:00:00	2023-11-16 10:36:44	2023-11-16 10:37:01
1899	24	1	78	500	2023-11-16 00:00:00	2023-11-16 10:36:44	2023-11-16 10:37:01
1900	25	1	75	200	2023-11-16 00:00:00	2023-11-16 10:37:28	2023-11-16 10:37:48
1901	25	1	78	80	2023-11-16 00:00:00	2023-11-16 10:37:28	2023-11-16 10:37:48
1902	22	1	6	400	2023-11-16 00:00:00	2023-11-16 10:38:28	2023-11-16 10:39:58
1903	22	1	8	300	2023-11-16 00:00:00	2023-11-16 10:38:28	2023-11-16 10:39:58
1904	22	1	59	500	2023-11-16 00:00:00	2023-11-16 10:38:28	2023-11-16 10:39:58
1905	22	1	64	400	2023-11-16 00:00:00	2023-11-16 10:38:28	2023-11-16 10:39:58
1906	43	1	6	625	2023-11-16 00:00:00	2023-11-16 10:40:43	2023-11-16 10:42:11
1907	43	1	8	550	2023-11-16 00:00:00	2023-11-16 10:40:43	2023-11-16 10:42:11
1908	43	1	59	325	2023-11-16 00:00:00	2023-11-16 10:40:43	2023-11-16 10:42:11
1909	43	1	64	525	2023-11-16 00:00:00	2023-11-16 10:40:43	2023-11-16 10:42:11
1910	22	1	6	700	2023-11-17 00:00:00	2023-11-17 10:16:38	2023-11-17 10:18:36
1911	22	1	8	500	2023-11-17 00:00:00	2023-11-17 10:16:38	2023-11-17 10:18:36
1912	22	1	9	50	2023-11-17 00:00:00	2023-11-17 10:16:38	2023-11-17 10:18:36
1913	22	1	59	125	2023-11-17 00:00:00	2023-11-17 10:16:38	2023-11-17 10:18:36
1914	22	1	64	125	2023-11-17 00:00:00	2023-11-17 10:16:38	2023-11-17 10:18:36
1915	43	1	9	950	2023-11-17 00:00:00	2023-11-17 10:19:40	2023-11-17 10:20:31
1916	43	1	59	375	2023-11-17 00:00:00	2023-11-17 10:19:40	2023-11-17 10:20:31
1917	43	1	64	800	2023-11-17 00:00:00	2023-11-17 10:19:40	2023-11-17 10:20:31
1918	27	1	19	1740	2023-11-17 00:00:00	2023-11-17 10:21:27	2023-11-17 10:21:43
1919	27	1	19	0	2023-11-17 00:00:00	2023-11-17 10:21:27	2023-11-17 10:21:43
1920	33	1	19	1450	2023-11-17 00:00:00	2023-11-17 10:22:03	2023-11-17 10:22:10
1921	31	1	67	520	2023-11-17 00:00:00	2023-11-17 10:22:57	2023-11-17 10:23:16
1922	31	1	75	30	2023-11-17 00:00:00	2023-11-17 10:22:57	2023-11-17 10:23:16
1923	31	1	76	400	2023-11-17 00:00:00	2023-11-17 10:22:57	2023-11-17 10:23:16
1924	31	1	79	330	2023-11-17 00:00:00	2023-11-17 10:22:57	2023-11-17 10:23:16
1934	25	1	80	20	2023-11-17 00:00:00	2023-11-17 10:26:18	2023-11-17 10:26:36
1925	32	1	70	350	2023-11-17 00:00:00	2023-11-17 10:23:45	2023-11-17 10:23:55
1926	32	1	75	250	2023-11-17 00:00:00	2023-11-17 10:23:45	2023-11-17 10:23:55
1927	23	1	62	1230	2023-11-17 00:00:00	2023-11-17 10:24:17	2023-11-17 10:24:24
1928	29	1	27	660	2023-11-17 00:00:00	2023-11-17 10:24:58	2023-11-17 10:25:10
1929	29	1	80	710	2023-11-17 00:00:00	2023-11-17 10:24:58	2023-11-17 10:25:10
1930	34	1	63	1241	2023-11-17 00:00:00	2023-11-17 10:25:27	2023-11-17 10:25:36
1931	25	1	47	561	2023-11-17 00:00:00	2023-11-17 10:26:18	2023-11-17 10:26:36
1932	25	1	77	30	2023-11-17 00:00:00	2023-11-17 10:26:18	2023-11-17 10:26:36
1933	25	1	78	100	2023-11-17 00:00:00	2023-11-17 10:26:18	2023-11-17 10:26:36
1935	24	1	45	570	2023-11-17 00:00:00	2023-11-17 10:27:02	2023-11-17 10:27:15
1936	24	1	78	600	2023-11-17 00:00:00	2023-11-17 10:27:02	2023-11-17 10:27:15
1937	28	1	58	800	2023-11-17 00:00:00	2023-11-17 10:27:34	2023-11-17 10:27:43
1938	28	1	77	550	2023-11-17 00:00:00	2023-11-17 10:27:34	2023-11-17 10:27:43
1939	30	1	58	427	2023-11-17 00:00:00	2023-11-17 10:28:03	2023-11-17 10:28:14
1940	30	1	65	272	2023-11-17 00:00:00	2023-11-17 10:28:03	2023-11-17 10:28:14
1941	26	1	65	1740	2023-11-17 00:00:00	2023-11-17 10:28:42	2023-11-17 10:28:59
1942	32	1	21	750	2023-11-17 00:00:00	2023-11-17 10:30:50	2023-11-17 10:30:57
1943	30	1	87	400	2023-11-17 00:00:00	2023-11-18 03:58:49	2023-11-18 03:58:55
1952	25	1	47	572	2023-11-18 00:00:00	2023-11-18 09:35:41	2023-11-18 09:35:49
1944	31	1	87	120	2023-11-17 00:00:00	2023-11-18 03:59:17	2023-11-18 03:59:46
1945	25	1	71	388	2023-11-17 00:00:00	2023-11-18 04:00:54	2023-11-18 04:01:01
1946	34	1	71	20	2023-11-17 00:00:00	2023-11-18 04:01:33	2023-11-18 04:01:39
1947	28	1	71	24	2023-11-17 00:00:00	2023-11-18 04:02:15	2023-11-18 04:02:27
1948	24	1	71	93	2023-11-17 00:00:00	2023-11-18 04:03:08	2023-11-18 04:03:14
1949	23	1	71	66	2023-11-17 00:00:00	2023-11-18 04:03:35	2023-11-18 04:03:41
1961	24	1	71	173	2023-11-18 00:00:00	2023-11-18 11:06:55	2023-11-18 11:07:24
1950	23	1	62	1250	2023-11-18 00:00:00	2023-11-18 09:33:06	2023-11-18 09:33:37
1951	34	1	63	1324	2023-11-18 00:00:00	2023-11-18 09:35:01	2023-11-18 09:35:08
1953	24	1	45	600	2023-11-18 00:00:00	2023-11-18 09:36:31	2023-11-18 09:36:40
1954	30	1	65	434	2023-11-18 00:00:00	2023-11-18 11:01:26	2023-11-18 11:01:53
1955	30	1	87	200	2023-11-18 00:00:00	2023-11-18 11:01:26	2023-11-18 11:01:53
1956	29	1	27	710	2023-11-18 00:00:00	2023-11-18 11:02:44	2023-11-18 11:03:01
1957	29	1	77	220	2023-11-18 00:00:00	2023-11-18 11:02:44	2023-11-18 11:03:01
1958	28	1	58	820	2023-11-18 00:00:00	2023-11-18 11:03:42	2023-11-18 11:04:00
1959	28	1	77	500	2023-11-18 00:00:00	2023-11-18 11:03:42	2023-11-18 11:04:00
1960	29	1	71	154	2023-11-18 00:00:00	2023-11-18 11:05:50	2023-11-18 11:05:57
1962	24	1	78	500	2023-11-18 00:00:00	2023-11-18 11:06:55	2023-11-18 11:07:24
1963	32	1	21	680	2023-11-18 00:00:00	2023-11-18 11:08:17	2023-11-18 11:08:47
1964	32	1	70	330	2023-11-18 00:00:00	2023-11-18 11:08:17	2023-11-18 11:08:47
1965	32	1	75	300	2023-11-18 00:00:00	2023-11-18 11:08:17	2023-11-18 11:08:47
1966	25	1	71	203	2023-11-18 00:00:00	2023-11-18 11:09:51	2023-11-18 11:10:23
1967	25	1	78	380	2023-11-18 00:00:00	2023-11-18 11:09:51	2023-11-18 11:10:23
1968	26	1	65	1305	2023-11-18 00:00:00	2023-11-18 11:11:51	2023-11-18 11:11:59
1969	30	1	58	535	2023-11-18 00:00:00	2023-11-18 11:12:41	2023-11-18 11:12:50
1970	43	1	6	175	2023-11-18 00:00:00	2023-11-18 11:13:30	2023-11-18 11:14:08
1971	43	1	8	150	2023-11-18 00:00:00	2023-11-18 11:13:30	2023-11-18 11:14:08
1972	22	1	6	1100	2023-11-18 00:00:00	2023-11-18 11:14:45	2023-11-18 11:16:13
1973	22	1	8	975	2023-11-18 00:00:00	2023-11-18 11:14:45	2023-11-18 11:16:13
1974	22	1	59	675	2023-11-18 00:00:00	2023-11-18 11:14:45	2023-11-18 11:16:13
1975	22	1	64	625	2023-11-18 00:00:00	2023-11-18 11:14:45	2023-11-18 11:16:13
1976	31	1	76	440	2023-11-18 00:00:00	2023-11-18 11:17:30	2023-11-18 11:19:20
1977	31	1	79	330	2023-11-18 00:00:00	2023-11-18 11:17:30	2023-11-18 11:19:20
1978	31	1	87	300	2023-11-18 00:00:00	2023-11-18 11:17:30	2023-11-18 11:19:20
1979	27	1	19	1280	2023-11-18 00:00:00	2023-11-18 11:19:45	2023-11-18 11:21:18
1980	33	1	19	1110	2023-11-18 00:00:00	2023-11-18 11:20:33	2023-11-18 11:21:18
\.


--
-- Name: boards_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.boards_id_seq', 4, true);


--
-- Name: companies_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.companies_id_seq', 1, true);


--
-- Name: customers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.customers_id_seq', 2, true);


--
-- Name: materials_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.materials_id_seq', 29, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.migrations_id_seq', 40, true);


--
-- Name: orders_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.orders_id_seq', 1, true);


--
-- Name: partners_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.partners_id_seq', 1, true);


--
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.permissions_id_seq', 4, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: product_steps_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.product_steps_id_seq', 43, true);


--
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.products_id_seq', 5, true);


--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.roles_id_seq', 4, true);


--
-- Name: suppliers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.suppliers_id_seq', 11, true);


--
-- Name: user_salaries_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.user_salaries_id_seq', 69, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.users_id_seq', 87, true);


--
-- Name: w_devices_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.w_devices_id_seq', 1, true);


--
-- Name: w_materials_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.w_materials_id_seq', 40, true);


--
-- Name: w_semi_products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.w_semi_products_id_seq', 1, false);


--
-- Name: w_tools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.w_tools_id_seq', 1, false);


--
-- Name: work_quantities_id_seq; Type: SEQUENCE SET; Schema: public; Owner: default
--

SELECT pg_catalog.setval('public.work_quantities_id_seq', 1980, true);


--
-- Name: boards boards_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.boards
    ADD CONSTRAINT boards_pkey PRIMARY KEY (id);


--
-- Name: companies companies_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.companies
    ADD CONSTRAINT companies_pkey PRIMARY KEY (id);


--
-- Name: customers customers_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.customers
    ADD CONSTRAINT customers_pkey PRIMARY KEY (id);


--
-- Name: materials materials_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.materials
    ADD CONSTRAINT materials_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: orders orders_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);


--
-- Name: partners partners_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.partners
    ADD CONSTRAINT partners_pkey PRIMARY KEY (id);


--
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: product_steps product_steps_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.product_steps
    ADD CONSTRAINT product_steps_pkey PRIMARY KEY (id);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: suppliers suppliers_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.suppliers
    ADD CONSTRAINT suppliers_pkey PRIMARY KEY (id);


--
-- Name: user_salaries user_salaries_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.user_salaries
    ADD CONSTRAINT user_salaries_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: w_devices w_devices_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_devices
    ADD CONSTRAINT w_devices_pkey PRIMARY KEY (id);


--
-- Name: w_materials w_materials_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_materials
    ADD CONSTRAINT w_materials_pkey PRIMARY KEY (id);


--
-- Name: w_semi_products w_semi_products_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_semi_products
    ADD CONSTRAINT w_semi_products_pkey PRIMARY KEY (id);


--
-- Name: w_tools w_tools_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.w_tools
    ADD CONSTRAINT w_tools_pkey PRIMARY KEY (id);


--
-- Name: work_quantities work_quantities_pkey; Type: CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.work_quantities
    ADD CONSTRAINT work_quantities_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: default
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: product_steps product_steps_product_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.product_steps
    ADD CONSTRAINT product_steps_product_id_foreign FOREIGN KEY (product_id) REFERENCES public.products(id);


--
-- Name: users users_board_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_board_id_foreign FOREIGN KEY (board_id) REFERENCES public.boards(id);


--
-- Name: users users_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: default
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id);


--
-- PostgreSQL database dump complete
--

